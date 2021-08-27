<?php

class order
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getOrder()
    {
        $this->db->query("SELECT * from orders");
        return $this->db->resultset();
    }

    public function create()
    {
        $this->db->query("INSERT INTO orders (user_id,Full_Name,Phone_no,Address)
        VALUES (:user_id,:Full_Name,:Phone_no,:Address)");
        $this->db->bind(":user_id", $this->user_id);
        $this->db->bind(":Full_Name", $this->Full_Name);
        $this->db->bind(":Phone_no", $this->Phone_no);
        $this->db->bind(":Address", $this->Address);
        $this->db->execute();
        $this->order_id = $this->db->query('SELECT LAST_INSERT_ID()');

        return $this->db->rowCount();
    }

    public function temp()
    {
        $this->db->query("INSERT INTO temp (user_id) VALUES (:user_id)");
        $this->db->bind(":user_id", $this->user_id);
        $this->db->execute();
        $this->order_id = $this->db->query('SELECT LAST_INSERT_ID()');
        return $this->db->rowCount();
    }
    
    public function find($order_id)
    {
        $this->db->query("SELECT * from orders WHERE order_id=:order_id");
        $this->db->bind(":order_id",$order_id);

        return $this->db->single();
    }

    public function getUser_orderbyId($id)
    { 

        $this->db->query("SELECT * FROM user_orders WHERE order_id = :id");
        $this->db->bind(':id', $id);
        return $this->db->resultset();

    }

    public function findUserCart($user_id)
    {
        $this->db->query("SELECT * from temp WHERE user_id=:user_id");
        $this->db->bind(":user_id",$user_id);
        return $this->db->single();
    }

    
}
?>