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
                        <a class="dropdown-item" href="include/seller.php">Sell</a>
                    <a class="dropdown-item" href="include/cart.php">Cart</a>
                    <a class="dropdown-item" href="include/orders.php">Orders</a>
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