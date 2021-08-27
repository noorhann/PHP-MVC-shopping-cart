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

    public function checkout($order_id)
    {
        $_SESSION['order_id']=$order_id;
        $cart = $this->cartModel->getForOrder($order_id);
        $this->view('orders/checkout' , $cart);
    }

    public function order()
    {
        $cart = $this->cartModel->getForOrder($_SESSION['order_id']);
        $orders = $this->detailsModel;
        foreach($cart as $cart):
            $orders->order_id = $_SESSION['order_id'];
            $orders->qty=$cart->qty;
            $orders->item_name=$cart->item_name;
            $orders->price=$cart->price;
            $orders->product_id=$cart->product_id;
            $orders->create();
        endforeach ;
        //$this->cartModel->clear($_SESSION['order_id']);
        $order =$this->orderModel;
        $order->order_id = $_SESSION['order_id'];
        $order->user_id = $_SESSION['user_id'];
        $order->Address='shoubra';
        $order->Phone_no=0123456;
        $order->Full_Name=$_SESSION['user_name'];
        $order->create();
        redirect('');
    }



}
?>