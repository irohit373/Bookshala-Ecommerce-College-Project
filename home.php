<?php 

    include 'function/connection.php';
    include 'function/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookशाला</title>

    <!-- CDN Tailwind CSS  -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- Tailwind CSS CDN link -->
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Offline Bootstrap CSs -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css">


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0A4D68;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
        <img src="img/ji.png" width="30" height="30" class="d-inline-block align-top" alt=""> Bookशाला</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.php">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <?php if (logged_in()) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['FIRST_NAME'];?></a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Cart</a>
                    <a class="dropdown-item" href="#">Orders</a>
                    <a class="dropdown-item" href="include/seller.php">Sell</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="function/logout.php">Logout</a>
                    </div>
                </li>            
                <?php }else { ?>
                    <li class="nav-item">
                    <a class="nav-link" href="login_page.php">Sign In</a>
                </li>
                    <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Carousel -->

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel indicators -->
                <ul class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ul>

                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/wallpaper_01.jpg" class="d-block w-100" height="400" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ji.png" class="d-block w-100" height="400" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/wallpaper_01.jpg" class="d-block w-100" height="400" alt="Slide 3">
                    </div>
                </div>

                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

<center><h1 class="Display-1">Store</h1></center>

<div class="container">
<divc class="row">
<?php
        $query = "SELECT * FROM items";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);

        if ($total != 0){
            while($tb_data = mysqli_fetch_assoc($data)){
                echo '
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="data/book_img/'.$tb_data['image_thumbnail'].'" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">'.$tb_data['title'].'</h5>
                  <p class="card-text">'.$tb_data['description'].'</p>
                  <a href="function/buynow.php" class="btn btn-success">Buy Now</a>
                  <a href="include/addtocart.php" class="btn btn-warning">Add to Cart</a>
                </div>
              </div>
              </div>
              ';
            }
            }else{
                
            }
        ?> 
        </div>
</div>  
                    
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>                    

                    <!-- Offline Bootstrap CSS -->
                    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <script>
                        $(document).ready(function(){
                            $("#myCarousel").carousel();
                            
                        });
                    </script>
    </body>
            
</html>