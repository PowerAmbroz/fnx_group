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
                    SELECT * FROM article_user aru
                    JOIN article a ON aru.article_id = a.id
                    WHERE user_id = :user_id
                    '
        );

        //Bind value
        $this->db->bind(':user_id', $user_id);
        $this->db->execute();
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