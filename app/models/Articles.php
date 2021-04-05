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
                    select *, GROUP_CONCAT(au.first_name," ", au.last_name SEPARATOR ",") AS authors, GROUP_CONCAT(au.id SEPARATOR ",") as author_id
                    from author au 
                    left join article a on a.id = au.article_id
                    JOIN category c ON a.category_id = c.id
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