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

    public function getAuthor($author_id)
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

    public function getArticlesFromAuthor($author_id)
    {
        $this->db->query(
            '
                SELECT * FROM author au
                JOIN article a ON a.id = au.article_id
                JOIN category c ON a.id = c.id
                WHERE au.id = :author_id
                
                '
        );
        $this->db->bind(':author_id', $author_id);

        return $this->db->setAllResults();
    }
}