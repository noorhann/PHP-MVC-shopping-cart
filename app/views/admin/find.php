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
    <title>Item Details</title>
</head>
<body>
    <div class="row">
        <div class="col-md-6 mx-auto ">
            
            <dl>
                <dt>Name</dt>
                <dd><?php echo $data->product_name ?> </dd>

                <dt>Price</dt>
                <dd><?php echo $data->product_price ?> </dd> 

                <dt>Description</dt>
                <dd><?php echo $data->Description;?> </dd>

                <dt>Image</dt>
                <dd><img src=<?php echo $data->product_image;?> ></dd>
            </dl>

            <a href="<?php echo URLROOT; ?>admin/details" >Back To Products List</a>
        </div>
    </div>
</body>
</html>