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
        $cart=$this->orderModel->findUserCart($_SESSION['user_id']);
        if ($cart == null)
        {
            $cart=$this->orderModel;
            $cart->user_id = $_SESSION['user_id'];
            $cart->order_id = $cart->temp();
        }
        $newitem = $this->cartModel;
        $newitem->product_id=$id;
        $newitem->qty =1;
        $newitem->order_id=$cart->order_id;
        $newitem->item_name =$this->productModel->find($id)->product_name ;
        $newitem->price=$this->productModel->find($id)->product_price;
        $newitem ->create();
        redirect('');
    }

    public function view_cart()
    {
        $cart=$this->orderModel->findUserCart($_SESSION['user_id']);
        $items= $this->cartModel->getForOrder($cart->order_id);
        $this->view('cart/view_cart' , $items);
    }

    public function removeFromCart($order_details_id)
    {
        $this->cartModel->delete($order_details_id);
        redirect('cart/view_cart');
    }
    

}
?>