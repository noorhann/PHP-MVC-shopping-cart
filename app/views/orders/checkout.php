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
    
<form method="$_POST" class='bg-light'>
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
            <input type="number" id="form18" name='phone' class="form-control" required>
          </div>

          <div class="md-form md-outline" style="margin-top: 20px;">
            <label for="form19">Email address</label>  
            <input type="email" id="form19" class="form-control">
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-4 mx-auto">
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="mb-3">The total amount of</h5>
          <ul class="list-group list-group-flush">

            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Temporary amount
              <span>$53.98</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>Gratis</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
  
              <span><strong>$53.98</strong></span>

            </li>

          </ul>

          <a href="<?php echo URLROOT; ?>orders/order" type="button" class="btn btn-primary btn-block waves-effect waves-light">Make purchase</a>

        </div>
      </div>
    </div>
  </div>
</form>    
</body>
</html>