<?php
class orders extends controller
{

    public function __construct()
    {
        $this->orderModel = $this->model('order'); 
        $this->productModel = $this->model('product'); 
        $this->cartModel = $this->model('cartModel'); 
        $this->detailsModel = $this->model('order_details'); 

    }

    public function checkout()
    {
        $cart = $this->cartModel->getForOrder();
        $this->view('orders/checkout' , $cart);
    }

    public function order()
    {

        $cart = $this->cartModel->getForOrder($_SESSION['user_id']);
        $orders = $this->detailsModel;
        foreach($cart as $cart):
            $orders->order_id = $this->cartModel->get_order_id($_SESSION['user_id'])->order_id;
            $orders->qty=$cart->qty;
            $orders->product_id=$cart->product_id;
            $orders->item_name=$cart->product_name;
            $orders->price=$cart->product_price;
            $orders->create();
        endforeach ;

        $order =$this->orderModel;
        $order->order_id = $this->cartModel->get_order_id($_SESSION['user_id'])->order_id;
        $order->user_id = $_SESSION['user_id'];
        $order->Address = 'Shoubra';
        $order->Phone_no="0123456789";
        $order->Full_Name = $_SESSION['user_id'];
        $order->create();
    
        $this->cartModel->deleteTemp($_SESSION['user_id']);
        $this->cartModel->clear();
        redirect('');

    }



}
?>
