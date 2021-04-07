<?php


class Category
{
    /**
     * @var Database
     */
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategories(): array
    {
        $this->db->query(
            '
                SELECT c.id, c.name, COUNT(a.id) as num FROM category c
                LEFT JOIN article a ON c.id = a.category_id
                GROUP BY c.name
                ORDER BY num DESC
                '
        );

        return $this->db->setAllResults();
    }

    public function getArticlesRelated(int $category_id): array
    {
        $this->db->query(
            '
                SELECT *,a.id as article_id, c.name as category_name, c.id as category_id FROM article a
                LEFT JOIN category c ON a.category_id = c.id
                WHERE a.category_id = :category_id
                '
        );
        $this->db->bind(':category_id', $category_id);

        return $this->db->setAllResults();
    }

}