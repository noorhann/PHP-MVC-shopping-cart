<?php
class cart extends controller
{

    public function __construct()
    {
        $this->orderModel = $this->model('order'); 
        $this->productModel = $this->model('product'); 
        $this->cartModel = $this->model('cartModel'); 

    }

    public function add($id)
    {
        $cart=$this->cartModel->findUserCart($_SESSION['user_id']);
        if ($cart == NULL )
        {
            $cart=$this->cartModel;
            $cart->user_id = $_SESSION['user_id'];
            $cart->temp();
        }
        $newitem = $this->cartModel;
        $newitem->product_id=$id;
        $newitem->qty =1;
        $newitem->user_id = $_SESSION['user_id'];
        $newitem ->create();
        redirect('');
    }

    public function view_cart()
    {
        $cart=$this->cartModel->findUserCart($_SESSION['user_id']);
        $items= $this->cartModel->getForOrder();
        $this->view('cart/view_cart' , $items);
    }

    public function removeFromCart($product_id)
    {
        $this->cartModel->delete($product_id);
        redirect('cart/view_cart');
    }

    
    public function findUserCart($user_id)
    {
        $this->db->query("SELECT * from orders WHERE user_id=:user_id");
        $this->db->bind(":user_id",$user_id);
        return $this->db->single();
    }
    

}
?>
