<?php
require APPROOT .'/views/inc/header.php' ;
require  'sidebar.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert data </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<div class="container mt-2 text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Add Record to Database </h2>
            </div>

            <form action="" method="post">

                <div class="form-group ">
                    <label>product name</label>
                    <input style="width: 300px;height: 25px; position:absolute; left:430px; " type="text" name="product_name" class="form-control" required="">
                </div>                        

                <div class="form-group">
                    <label style="padding-top :30px;">product price</label>
                    <input style="width: 300px;height: 25px; position:absolute; left:430px;" type="text" name="price" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label  style="padding-top :30px;">product image path</label>
                    <input  style="width: 300px;height: 25px; position:absolute; left:430px;" type="text" name="img" class="form-control" required="">
                </div>
                <br> <br>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
                <a style="margin-left: 35px;" href="<?php echo URLROOT; ?>admin/details" >Back To Products List</a>

            </form>

        </div>
    </div>        
</div>


