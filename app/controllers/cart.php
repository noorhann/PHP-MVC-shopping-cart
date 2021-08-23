<?php
class cart extends controller
{

    public function __construct()
    {
        $this->orderModel = $this->model('order'); 
    }

    public function index()
    {
        $this->view('cart/index');
    }

    public function add()
    {

    }

}
?>