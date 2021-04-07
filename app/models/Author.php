<?php


class Author
{
    /**
     * @var Database
     */
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAuthor(int $author_id): array
    {
        $this->db->query(
            '
                SELECT * FROM author
                WHERE id = :author_id
                '
        );
        $this->db->bind(':author_id', $author_id);

        return $this->db->setAllResults();
    }

    public function getArticlesFromAuthor(int $author_id): array
    {
        $this->db->query(
            '
                SELECT *, c.name as category_name FROM author au
                JOIN article a ON a.id = au.article_id
                LEFT JOIN category c ON au.article_id = c.id
                WHERE au.id = :author_id
                
                '
        );
        $this->db->bind(':author_id', $author_id);

        return $this->db->setAllResults();
    }

    public function getAllAuthors(): array
    {
        $this->db->query(
            '
                SELECT * FROM author au
                '
        );

        return $this->db->setAllResults();
    }
}