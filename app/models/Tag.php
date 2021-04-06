<?php


class Tag
{
    /**
     * @var Database
     */
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTaggedArticles($tag_name)
    {
        $this->db->query(
            '
            SELECT * FROM tag t
            LEFT JOIN article_tag art ON t.id = art.tag_id
            JOIN article a ON a.id = art.article_id
            WHERE t.name = :tag_name
        '
        );
        $this->db->bind(':tag_name', $tag_name);

        return $this->db->setAllResults();
    }

    public function getAllTags()
    {
        $this->db->query(
            '
            SELECT * FROM tag t
        '
        );

        return $this->db->setAllResults();
    }

    public function countArticles($id)
    {
        $this->db->query(
            '
            SELECT t.id, t.name, count(*) as num FROM article_tag art
            LEFT JOIN tag t ON t.id = art.tag_id
            GROUP By tag_id
            ORDER BY count(*) DESC
        '
        );
        $this->db->bind(':id', $id);

        return $this->db->setAllResults();
    }
}
