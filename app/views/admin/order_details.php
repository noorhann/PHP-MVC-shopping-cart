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
            <table class="table text-center table-light">
                <thead>
                    <tr>

                        <th scope="col">Item name</th>
                        <th scope="col">Price</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $orders) :?>
                        <tr>
                            <th><?php echo $orders->item_name; ?></th>
                            <td><?php echo $orders->price; ?></td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>

            <a href="<?php echo URLROOT; ?>admin/orders" >Back To order List</a>
        </div>
    </div>
</body>
</html>