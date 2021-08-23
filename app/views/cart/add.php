<?php require APPROOT .'/views/inc/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
        <form action='' method='post' class='cart-items'>
                <div class='border rounded'>
                    <div class='row bg-white'>
                    <?php foreach($data as $order) : ?>
                        <div class='col-md-3 pl-0'>
                            <img src=<?php echo $order->product_image;?>  class='img-fluid'>
                        </div>
                        <div class='col-md-6'>
                                <h5 class='pt-2'> <?php echo $order->product_name;?></h5>
                                <small class='text-secondary'>Seller: Souq</small>
                                <h5 class='pt-2'>$<?php echo $order->product_price;?></h5>
                                <button type='submit' class='btn btn-warning'>Save for Later</button>
                                <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
                        </div>
                        <?php endforeach; ?>

                        </div>
                    </div>
                </form>
    
</body>
</html>