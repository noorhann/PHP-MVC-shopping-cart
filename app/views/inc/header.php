<title><?php echo SITENAME;?> </title>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no"
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
</head>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a href="<?php echo URLROOT;?>" class="navbar-brand">
            <h3 class="px-9">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
                <?php if(isset($_SESSION['user_id'])) : ?>

                    <a href="<?php echo URLROOT; ?>users/logout" style="color: #f0f0f0; font-size: 20px;">Log out</a>

                <?php elseif(!isset($_SESSION['user_id'])): ?>  
                    <a href="<?php echo URLROOT; ?>users/login" style="color: #f0f0f0; font-size: 20px;">Log in</a>
                    <a href="<?php echo URLROOT; ?>users/register" style="color: #f0f0f0; font-size: 20px;">Register</a>
                <?php endif; ?> 

            
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if( $_SESSION['user_type']!='admin' ):?>
        
        <?php else : ?>  
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="<?php echo URLROOT; ?>cart/index" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart          
                    </h5>
                </a>
            </div>
        </div>
        <?php endif; ?> 

    </nav>
</header>
