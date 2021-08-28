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
        $this->db->query("INSERT INTO orders (order_id,user_id,Full_Name,Phone_no,Address)
        VALUES (:order_id,:user_id,:Full_Name,:Phone_no,:Address)");
        $this->db->bind(":user_id", $this->user_id);
        $this->db->bind(":order_id", $this->order_id);
        $this->db->bind(":Full_Name", $this->Full_Name);
        $this->db->bind(":Phone_no", $this->Phone_no);
        $this->db->bind(":Address", $this->Address);
        $this->db->execute();
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


    public function remove($order_id)
    {
        $this->db->query("DELETE  from cart WHERE order_id=:order_id");
        $this->db->bind(":order_id",$order_id );
        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    
}
?>
