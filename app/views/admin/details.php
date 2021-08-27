<?php
require APPROOT .'/views/inc/adminHeader.php' ;
require  'sidebar.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a class="btn btn-dark" href="<?php echo URLROOT;?>admin/create" role="button" style="float: right; margin-right: 50px; margin-top: -50px;">Add new product</a>    
<h1 class="text-center" >Products details</h1>
<div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center table-light">
                <thead>
                    <tr>
                        <th scope="col">product id</th>
                        <th scope="col">product name</th>
                        <th scope="col">product price</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['item'] as $details) :?>
                        <tr>
                            <th><?php echo $details->id; ?></th>
                            <th><?php echo $details->product_name; ?></th>
                            <th><?php echo $details->product_price; ?></th>
                            <td>
                                <table class='table text-center table-light'>

                                    <thead>
                                    </thead>

                                    <tbody>
                                        <th><a class="btn btn-success" href="<?php echo URLROOT; ?>admin/find/<?php echo $details->id; ?>" role="button">Details</a></th>
                                        <th>
                                            <form class="pull-right" action="<?php echo URLROOT; ?>/admin/delete/<?php echo $details->id; ?>" method="post">
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </th>
                                        <th><a class="btn btn-warning" href="<?php echo URLROOT; ?>admin/update/<?php echo $details->id; ?>" role="button">Edit</a></th>    
                                    </tbody>
                        
                                </table>
                            </td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>

</body>
</html>
