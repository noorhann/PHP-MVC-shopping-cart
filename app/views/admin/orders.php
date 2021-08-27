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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
</head>
<body>
<h1 class="text-center" >Orders details</h1>
<div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center table-light">
                <thead>
                    <tr>
                        <th scope="col">Order id</th>
                        <th scope="col">Customer name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['order'] as $orders): ?>
                        <tr>
                            <th><?php echo $orders->order_id; ?></th>
                            <td><?php echo $orders->Full_Name; ?></td>
                            <td><?php echo $orders->Phone_no; ?></td>
                            <td><?php echo $orders->Address; ?></td>
                            <td>
                                <table class='table text-center table-light'>

                                    <thead>
                                    </thead>

                                    <tbody>
                                        <th><a class="btn btn-success" href="<?php echo URLROOT; ?>admin/order_details/<?php echo  $orders->order_id; ?>" role="button">Details</a></th>
                                    </tbody>
                        
                                </table>
                            </td>
                    <?php endforeach; ?>

                        
                </tbody>
                </table>

            </div>
        </div>
    </div>
    
</body>
</html>
