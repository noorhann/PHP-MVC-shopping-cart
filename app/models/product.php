<?php

class product
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    // this function is concidered logic, should not be implemented here !
    // تمام بس معرفتش أحطها فين بردو إيموشن بيجري 
    public function getproduct()
    {
        $this->db->query("SELECT * from producttb");
        return $this->db->resultset();
    }

    public function create($data)
    {
        $this->db->query("INSERT INTO Producttb (product_name, product_price, product_image ,Description)
        VALUES (:product_name,:product_price,:product_image , :Description)");
        $this->db->bind(":product_name",  $data['product_name']);
        $this->db->bind(":product_price", $data['product_price']);
        $this->db->bind(":product_image", $data['product_image']);
        $this->db->bind(":Description", $data['Description']);


        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function find($item_id)
    {
        $this->db->query("SELECT * from producttb WHERE id=:item_id");
        $this->db->bind(":item_id",$item_id);

        return $this->db->single();
    }

    public function update($data)
    {

        $this->db->query("UPDATE  Producttb SET product_name=:product_name , product_price =:product_price
                        , product_image=:product_image, Description=:Description WHERE id=:id");
        $this->db->bind(":id", $data['id']);
        $this->db->bind(":product_name" , $data['product_name']);
        $this->db->bind(":product_price" , $data['product_price']);
        $this->db->bind(":product_image" , $data['product_image']);
        $this->db->bind(":Description" , $data['Description']);
        
        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteProdcut($id)
    {
        $this->db->query("DELETE from Producttb WHERE id=:id");
        $this->db->bind(":id", $id);

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
