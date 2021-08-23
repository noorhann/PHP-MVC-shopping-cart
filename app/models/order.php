
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

    public function create($data)
    {
        $this->db->query("INSERT INTO user_orders (item_name,price)
        VALUES (:item_name,:price)");
        $this->db->bind(":item_name", $data['product_name']);
        $this->db->bind(":price", $data['product_price']);
        if($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }

    public function viewcart()
    {
        if (isset($_SESSION['cart'])){
            $product_id = array_column($_SESSION['cart'], 'product_id');
            $result= $this->db->query("SELECT * from producttb ");
            $result = $this->db->resultset();
            return $result ;}
    
    }

    public function getUser_orderbyId($id)
    { 

        $this->db->query("SELECT * FROM user_orders WHERE order_id = :id");
        $this->db->bind(':id', $id);
        return $this->db->resultset();

    }

}
?>