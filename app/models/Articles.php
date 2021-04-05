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
                SELECT title, short_description, price, category.id, category.name, author.first_name, author.last_name FROM article
                JOIN category ON article.category_id = category.id
                JOIN author ON article.id = author.article_id
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

//JOIN article_tag ON article.id = article_tag.article_id AND article_tag.article_id = 1
//                JOIN tag ON article_tag.tag_id=tag.id