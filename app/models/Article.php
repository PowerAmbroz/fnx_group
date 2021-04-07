<?php


class Article
{
    /**
     * @var Database
     */
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllArticles(): array
    {
        $this->db->query(
            '
                    select *,a.id,au.article_id, c.name as category_name,
                            GROUP_CONCAT(DISTINCT au.first_name," ", au.last_name SEPARATOR ",") AS authors,
                            GROUP_CONCAT(DISTINCT au.id SEPARATOR ",") as author_id,
                            GROUP_CONCAT(DISTINCT t.name SEPARATOR ",") as tags

                    from author au 
                    JOIN article a on a.id = au.article_id
                    LEFT JOIN category c ON a.category_id = c.id
                    LEFT JOIN article_tag art ON art.article_id = au.article_id
                    LEFT JOIN tag t ON t.id = art.tag_id
                    group by au.article_id;
                '
        );

        return $this->db->setAllResults();
    }

    public function getArticle(int $article_id): array
    {
        $this->db->query(
            '
                    SELECT *,a.id,au.article_id,c.name as category_name,
                            GROUP_CONCAT(DISTINCT au.first_name," ", au.last_name SEPARATOR ",") AS authors,
                            GROUP_CONCAT(DISTINCT au.id SEPARATOR ",") as author_id,
                            GROUP_CONCAT(DISTINCT t.name SEPARATOR ",") as tags

                    FROM author au 
                    JOIN article a on a.id = au.article_id
                    LEFT JOIN category c ON a.category_id = c.id
                    LEFT JOIN article_tag art ON art.article_id = au.article_id
                    LEFT JOIN tag t ON t.id = art.tag_id
                    WHERE a.id = :article_id
                    group by au.article_id;
                '
        );
        $this->db->bind(':article_id', $article_id);

        return $this->db->setAllResults();
    }

    public function setArticleBought(int $article_id, int $user_id): bool
    {
        $query = $this->db->query(
            '
                    INSERT INTO article_user (article_id, user_id)
                    VALUES (:article_id, :user_id)
                '
        );
        $this->db->bind(':article_id', $article_id);
        $this->db->bind(':user_id', $user_id);

        $row = $this->db->execute();
        if ($row) {
            return true;
        } else {
            return false;
        }
    }

    public function checkArticle(int $article_id, int $user_id): bool
    {
        $query = $this->db->query(
            '
                    SELECT article_id, user_id FROM article_user 
                    WHERE article_id = :article_id AND user_id = :user_id
                '
        );
        $this->db->bind(':article_id', $article_id);
        $this->db->bind(':user_id', $user_id);

        $row = $this->db->single();
        if ($row) {
            return true;
        } else {
            return false;
        }
    }
}