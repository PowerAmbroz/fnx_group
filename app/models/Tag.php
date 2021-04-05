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
        var_dump($tag_name);
        $this->db->query(
            '
SELECT * FROM tag t
            JOIN article_tag art ON t.id = art.tag_id
            JOIN article a ON a.id = art.article_id
            WHERE t.name = :tag_name
        '
        );
        $this->db->bind(':tag_name', $tag_name);

        return $this->db->setAllResults();
    }
}
