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
}