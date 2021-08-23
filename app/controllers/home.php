<?php
class home extends controller{
    public function __construct()
    {
        $this->productModel = $this->model('product');
    }
    public function index(){
        $product = $this->productModel->getproduct();
        $data =[
            'product' => $product 
        ];
        $this->view('home/index' ,$data);
    }

}
?>