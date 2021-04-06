<?php


class Articles
{
    /**
     * @var Database
     */
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllArticles(){
        $this->db->query(
            '
                    select *,c.name as category_name,
                            GROUP_CONCAT(DISTINCT au.first_name," ", au.last_name SEPARATOR ",") AS authors,
                            GROUP_CONCAT(DISTINCT au.id SEPARATOR ",") as author_id,
                            GROUP_CONCAT(DISTINCT t.name SEPARATOR ",") as tags

                    from author au 
                    JOIN article a on a.id = au.article_id
                    JOIN category c ON a.category_id = c.id
                    JOIN article_tag art ON art.article_id = au.article_id
                    JOIN tag t ON t.id = art.tag_id
                    group by au.article_id;
                '
        );

        return $this->db->setAllResults();
    }

    public function getArticleTags($article_id){
        $this->db->query(
            '
                SELECT tag.name FROM article_tag
                JOIN tag ON article_tag.tag_id = tag.id
                WHERE article_tag.article_id = :article_id
                
                '
        );
        $this->db->bind(':article_id', $article_id);

        return $this->db->setAllResults();
    }
}