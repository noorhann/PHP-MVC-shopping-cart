<?php require APPROOT .'/views/inc/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
    
<form action="<?php echo URLROOT; ?>orders/order" method="$_POST" class='bg-light'>
  <div class="row py-5">
    <div class="col-lg-6 mx-auto" >
      <div class="card wish-list pb-1">
        <div class="card-body">
          <h5 class="mb-2">Billing details</h5>

          <div class="row">

            <div class="col-lg-6">
              <div class="md-form md-outline mb-0 mb-lg-4">
                <label for="firstName">First name</label>
                <input type="text" id="firstName" name='firstName' class="form-control mb-0 mb-lg-2" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="md-form md-outline">
                <label for="lastName">Last name</label>
                <input type="text" name="lastName" id="lastName" class="form-control">
              </div>
            </div>

          </div>

          <div class="md-form md-outline mt-0">
            <label for="form14">Address</label>
            <input type="text" name="address" id="form14" placeholder="House number and street name" class="form-control" required>
            <? $_SESSION['address']= $_POST['address']; ?>
          </div>

          <div class="md-form md-outline " style="margin-top: 20px;">
            <label for="form15">Address</label>
            <input type="text" id="form15" placeholder="Apartment, suite, unit etc. (optional)"
              class="form-control" >
          </div>

          <div class="md-form md-outline" style="margin-top: 20px;">
            <label for="form16">Postcode / ZIP</label>
            <input type="text" id="form16" class="form-control">
          </div>

          <div class="md-form md-outline" style="margin-top: 20px;">
            <label for="form17">Town / City</label>
            <input type="text" id="form17" class="form-control">
          </div>

          <div class="md-form md-outline" style="margin-top: 20px;">
            <label for="form18">Phone</label>
            <input  id="form18" name='phone' class="form-control" required>
            <? $_SESSION['phone']= $_POST['phone']; ?>

          </div>

          <div class="md-form md-outline" style="margin-top: 20px;">
            <label for="form19">Email address</label>  
            <input type="email" id="form19" class="form-control">
          </div>
          <input  name='purchase' style="margin-top: 20px;" type="submit" value="Make purchase" class="btn btn-success btn-block">

        </div>
      </div>
    </div>


        </div>
      </div>
    </div>
  </div>
</form>    
</body>
</html>
