<?php

class cartModel
{
    
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getForOrder($order_id)
    {
        $this->db->query("SELECT cart.*, producttb.* From cart join producttb on cart.product_id = producttb.id WHERE cart.order_id = $order_id");

        return  $this->db->resultset();

    }

    public function find($order_details_id)
    {
        $this->db->query("SELECT * from cart WHERE order_details_id=:order_details_id");
        $this->db->bind(":order_details_id",$order_details_id);
        return $this->db->single();
    }

    public function create()
    {
        $this->db->query("INSERT INTO cart (order_id,product_id,item_name,qty,price)
        VALUES (:order_id,:product_id,:item_name,:qty,:price) ON DUPLICATE KEY UPDATE qty=qty+:qty");
        $this->db->bind(":order_id", $this->order_id);
        $this->db->bind(":product_id", $this->product_id);
        $this->db->bind(":item_name", $this->item_name);
        $this->db->bind(":price", $this->price);
        $this->db->bind(":qty", $this->qty);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function delete($order_details_id)
    {
        $this->db->query("DELETE  from cart WHERE order_details_id=:order_details_id");
        $this->db->bind(":order_details_id",$order_details_id );
        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function clear($order_id)
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