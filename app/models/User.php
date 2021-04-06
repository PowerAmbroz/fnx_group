<?php


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM user");

        return $this->db->setAllResults();
    }

    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM user WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if ($password === $hashedPassword) {
            return $row;
        } else {
            return false;
        }
    }

    public function getBoughtArticles($user_id)
    {
        $this->db->query(
            '
                    SELECT *, c.name as category_name,
                           GROUP_CONCAT( DISTINCT au.first_name," ", au.last_name SEPARATOR ",") AS authors,
                           GROUP_CONCAT( DISTINCT au.id SEPARATOR ",") as author_id,
                           GROUP_CONCAT( DISTINCT t.name SEPARATOR ",") as tags
                    FROM article_user aru
                    JOIN author au ON au.article_id = aru.article_id
                    JOIN article a ON aru.article_id = a.id
                    JOIN category c ON a.category_id = c.id
                    JOIN article_tag art ON art.article_id = au.article_id
                    JOIN tag t ON t.id = art.tag_id
                    WHERE aru.user_id = :user_id
                    GROUP BY aru.article_id
                    '
        );

        //Bind value
        $this->db->bind(':user_id', $user_id);

        return $this->db->setAllResults();
    }

    public function updateUserWallet($user_id, $calculate)
    {
        $this->db->query(
            '
                    UPDATE user SET wallet = :calculate
                    WHERE id = :user_id
                    '
        );

        //Bind value
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':calculate', $calculate);
        $this->db->execute();
    }

    public function getWallet($user_id)
    {
        $this->db->query(
            '
                    SELECT wallet FROM user
                    WHERE id = :user_id
                    '
        );

        //Bind value
        $this->db->bind(':user_id', $user_id);
        return $this->db->single();
    }

}