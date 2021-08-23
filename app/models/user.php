<?php

class user{

    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function findEmail($email)
    {

        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email',$email);
        $res = $this->db->single();
        if ($this->db->rowCount() > 0 )
        {
            return true ;
        }
        else 
        {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function login($email , $password )
    {
        $this->db->query('SELECT * from users WHERE email = :email');
        $this->db->bind(':email', $email);
        
        $row = $this->db->single();

        $real_password = $row->password;
        if($password == $real_password)
        {
            return $row ;
        }
        else 
        {
            return false ; 
        }

    }

}
?>