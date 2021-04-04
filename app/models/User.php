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
        $this->db->query("SELECT * FROM users");

        return $this->db->setAllResults();
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE user_email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if ($password === $hashedPassword) {
            return $row;
        } else {
            return false;
        }
    }
}