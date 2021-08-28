<?php

class admin extends controller
{
    public function __construct()
    {
        $this->productModel = $this->model('product'); 
        $this->orderModel = $this->model('order');
    }

    public function create()
    {
        if(isset($_POST['submit']))
        {
            $product_name  = $_POST['product_name'];
            $product_price = $_POST['price'];
            $product_image = $_POST['img'];

            $data = [
                "product_name"  => $product_name,
                "product_price" => $product_price,
                "product_image" => $product_image
            ] ;

            if($this->productModel->create($data))
            {
            
                $this->view('admin/create');
            }
            else
            {
                $this->view('admin/create' );
            }
        }
        else
        {
            $data = [
                "product_name"  => '',
                "product_price" => '',
                "product_image" => ''
            ];

            $this->view('admin/create' , $data);
        }
    }

    public function details()
    {
        $item = $this->productModel->getproduct();
        $data = [
            'item' => $item
        ];

        $this->view('admin/details',  $data);
    }

    public function orders()
    {

        $order = $this->orderModel->getOrder();
        $data =[
            'order' => $order 
        ];
        $this->view('admin/orders' ,$data);

    }

    public function order_details($id)
    {
        $data = $this->orderModel->getUser_orderbyId($id);
        $this->view('admin/order_details' , $data);
    }

    public function find($id)
    {
        $data = $this->productModel->find($id);
        $this->view('admin/find' , $data);
    }

    public function update($id)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        
            $product_name  = $_POST['product_name'];
            $product_price = $_POST['price'];
            $product_image = $_POST['img'];
            $Description = $_POST['description'];

            $data = [
                'id' => $id,
                "product_name"  => $product_name,
                "product_price" => $product_price,
                "product_image" => $product_image,
                "Description"   =>  $Description
            ] ;

            if($this->productModel->update($data))
            {
                $this->view('admin/update');
            }
            else
            {
                
                $this->view('admin/update',$data);
            }
        }
        else
        {
            $data = [
                "product_name"  => '',
                "product_price" => '',
                "product_image" => '',
                "Description"   =>  ''
            ];

            $this->view('admin/update' , $data);
        }
    }

    public function delete($id)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if($this->productModel->deleteProdcut($id))
            {
                redirect('admin/details');
            }
            else
            {
                die("somthing went wrong");
            }
        }
        else
        {
            redirect('admin/details');
        }
    }
}
?>
