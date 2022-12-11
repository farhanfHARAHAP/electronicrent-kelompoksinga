<?php

#This is Navbar
function initNavBar(){

?>
 <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            
            </div>
            <div class="col-lg-6 text-center text-lg-right">

                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="../" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Singa</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Elektronik</span>
                </a>
            </div>
            

        </div>
    </div>
    <!-- Topbar End -->

<!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i> Electronic Category</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                 <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">

                        </div>
                        <a href="type-office.php" class="nav-item nav-link">Office</a>
                        <a href="type-office.php" class="nav-item nav-link">College</a>
                        <a href="type-office.php" class="nav-item nav-link">School</a>
                        <a href="type-game.php" class="nav-item nav-link">Gaming</a>

                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="<?=$home?>" class="text-decoration-none d-block d-lg-none">
                        <span href="../" class="h1 text-uppercase text-dark bg-light px-2">Toko</span>
                        <span href="../" class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Singa</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="../" class="nav-item nav-link">Home</a>
                            <a href="../checkmyorder/form.php" class="nav-item nav-link">Check Order</a>
                            <a href="../rules.php" class="nav-item nav-link">Rules</a>
                            <a href="../payment.php" class="nav-item nav-link">Payment</a>

                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
<!--Navbar-->

<?php }
?>