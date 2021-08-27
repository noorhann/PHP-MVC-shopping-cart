<?php

class order_details
{
    
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getForOrder($order_id)
    {
        $this->db->query("SELECT user_orders.*, producttb.* From user_orders join producttb on user_orders.product_id = producttb.id WHERE user_orders.order_id = $order_id");

        return  $this->db->resultset();

    }


    public function create()
    {   
        
        $this->db->query("INSERT INTO user_orders (order_id,product_id,item_name,qty,price)
        VALUES (:order_id,:product_id,:item_name,:qty,:price) ON DUPLICATE KEY UPDATE qty=qty+:qty");
        $this->db->bind(":order_id", $this->order_id);
        $this->db->bind(":product_id", $this->product_id);
        $this->db->bind(":item_name", $this->item_name);
        $this->db->bind(":price", $this->price);
        $this->db->bind(":qty", $this->qty);
        $this->db->execute();
        return $this->db->rowCount();
    }

}
?>