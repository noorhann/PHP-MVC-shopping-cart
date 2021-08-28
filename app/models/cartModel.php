<?php

class cartModel
{
    
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getForOrder()
    {
        $this->db->query("SELECT cart.*, producttb.* From cart join producttb on cart.product_id = producttb.id ");

        return  $this->db->resultset();

    }

    public function temp()
    {
        $this->db->query('INSERT INTO temp (user_id) VALUES (:user_id)');
        $this->db->bind(":user_id", $this->user_id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get_order_id($user_id)
    {
        $this->db->query('SELECT * FROM temp WHERE user_id= :user_id');
        $this->db->bind(":user_id", $user_id);
        return $this->db->single();
    }

    public function deleteTemp($user_id)
    {
        $this->db->query('DELETE FROM temp WHERE user_id= :user_id');
        $this->db->bind(":user_id", $user_id);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function create()
    {
        $this->db->query("INSERT INTO cart (user_id,product_id,qty)
        VALUES (:user_id,:product_id,:qty) ON DUPLICATE KEY UPDATE qty=qty+:qty");

        $this->db->bind(":user_id", $this->user_id);
        $this->db->bind(":product_id", $this->product_id);
        $this->db->bind(":qty", $this->qty);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function delete( $product_id)
    {
        $this->db->query("DELETE  from cart WHERE product_id = $product_id");
        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function clear()
    {
        $this->db->query("DELETE from cart ");
        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function findUserCart($user_id)
    {
        $this->db->query("SELECT * from temp WHERE user_id=:user_id");
        $this->db->bind(":user_id",$user_id);
        return $this->db->single();
    }

}
?>
