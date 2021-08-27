<!DOCTYPE html>
<html>
<head>

    <title> MY CART </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    
    <style>
        .body
        {
            background-color: #f5f5f5;
        }
        .Product-img img
        {
            width: 100%;
        }
        .main-section
        {
            font-family: 'Roboto Condensed', sans-serif;
            margin-top:100px;
        }
    </style>

</head>

<body>
    <div class="container main-section">
        <div class="row">
            <div class="col-lg-12 pb-2">
                <h4> MY CART</h4>
            </div>
            <div class="col-lg-12 pl-3 pt-3">
                <table class="table table-hover border bg-white">
                    
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th style="width:10%;">Quantity</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php static $sum = 0 ;?>
                        <?php foreach($data as $items): ?>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-lg-2 Product-img">
                                        <img src="<?php echo $items->product_image; ?>" alt="..." class="img-responsive"/>
                                    </div>
                                    <div class="col-lg-10">
                                        <h4 class="nomargin"><?php echo $items->product_name; ?></h4>
                                        <p><?php echo $items->Description; ?></p>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <?php echo $items->product_price; ?>
                            </td>

                            <td data-th="Quantity">
                                    <input type="" class="form-control text-center"  value="<?php echo $items->qty; ?>">
                            </td>

                            <td><?php echo $items->product_price *$items->qty ; ?></td>

                            <td class="actions" data-th="" style="width:10%;">
                                <a class="btn btn-danger btn-sm" href="<?php echo URLROOT; ?>cart/removeFromCart/<?php echo $items->order_details_id; ?>"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php  $sum += $items->product_price *$items->qty ; ?>
                        <?php endforeach ?> 
                    </tbody>

                    <tfoot>
                        <tr>
                            <td>
                                <a href="<?php echo URLROOT; ?>/home/index" class="btn btn-warning text-white"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                            </td>

                            <td colspan="2" class="hidden-xs"></td>

                            
                            <td class="hidden-xs text-center" style="width:10%;">
                                <strong>Total <?php  echo $sum ?> :</strong>
                            </td>

                            <td>
                                <a href="<?php echo URLROOT; ?>orders/checkout/<?php echo $items->order_id?>"  class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
