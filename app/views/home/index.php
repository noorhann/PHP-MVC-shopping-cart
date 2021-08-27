<?php require APPROOT .'/views/inc/header.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no"
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
    </head>
<body>
    <div class="container">
        <div class="row text-center py-5">
        <?php foreach($data['product'] as $product) : ?>
                <div class='col-lg-4 col-md-3 col-sm-6 my-3 my-md-0 '>
                        <form action="<?php echo APPROOT; ?>controllers/cart.php" method='POST'>
                            <div class='shadow-sm p-3 mb-5 bg-white '>
                                    <div>
                                        <img src=<?php echo $product->product_image;?> class='img-fluid card-img-top'>
                                    </div>
                            <div class='card-body'>
                                <h5 class='card-title'> <?php echo $product->product_name;?> </h5>
                                <h6>
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='far fa-star'></i>
                                </h6>
                                <p class='card-text'>
                                    <?php echo $product->Description;?>
                                </p>
                                <h5>
                                    <span class='price'>$<?php echo $product->product_price;?></span>
                                </h5>
                                <a  role="button" type='submit' class='btn btn-warning' name='add' href="<?php echo URLROOT; ?>cart/add/<?php echo $product->id;?>">Add to cart <i class='fas fa-shopping-cart'></i></a>
                                <input type='hidden' name='product_id' value=<?php echo $product->id;?> >

                            </div>
                            </div>
                        </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
