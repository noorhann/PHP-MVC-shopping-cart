<?php
require APPROOT .'/views/inc/header.php' ;
require  'sidebar.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

<div class="container mt-2 text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Edit product details </h2>
            </div>

            <form action="" method="post">

                <div class="form-group ">
                    <label>product name</label>
                    <input style="width: 300px;height: 25px; position:absolute; left:430px; "  name="product_name" class="form-control" required="">
                </div>                        

                <div class="form-group">
                    <label style="padding-top :30px;">product price</label>
                    <input style="width: 300px;height: 25px; position:absolute; left:430px;" type="text" name="price" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label  style="padding-top :30px;">product image path</label>
                    <input  style="width: 300px;height: 25px; position:absolute; left:430px;" type="text" name="img" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label  style="padding-top :30px;">Description</label>
                    <input  style="width: 300px;height: 25px; position:absolute; left:430px;" type="text" name="description" class="form-control" required="">
                </div>

                <br><br>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
                <a style="margin-left: 35px;" href="<?php echo URLROOT; ?>admin/details" >Back To Products List</a>

            </form>

        </div>
    </div>        
</div>


