<html>

<!-- Init Head -->
<?php
include_once 'resource/html-head.php';
initHead();
?>

<body>

<!-- Init Navbar -->
<?php
include_once 'resource/navbar.php';
initNavBar('./');
?>

<!-- courosel -->
<div class="container">
  <h2>Quick Peek</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/GM003.JPG" alt="gaming" style="width:60%;">
          <div class="carousel-caption d-none d-md-block">
    <h5>Playstation 5</h5>
    <p>SONY
    Keunggulan lainnya dari Sony PS5 adalah memiliki output 8k pada layar beresolusi 4320p.

    Rp. 89800 /hari
    </p>
    <a href="item/GM003.php" class="btn btn-primary">Check</a>
  </div>
      </div>

      <div class="item">
        <img src="img/OF003.JPG" alt="Chicago" style="width:60%;">
        <div class="carousel-caption d-none d-md-block">
        <h5>Macbook Air M1 MAX</h5>
        <p>Apple
        Laptop yang cocok untuk editing dan yang membutuhkan kerja berat di laptop ,laptop ini mampu tahan multitasking tanpa lag

        Rp. 94500 /hari</p>
        <a href="item/OF003.php" class="btn btn-primary">Check</a>
  </div>
      </div>
    
      <div class="item">
        <img src="img/GM006.JPG" alt="New york" style="width:60%;">
        <div class="carousel-caption d-none d-md-block">
        <h5>NVIDIA Tesla T4</h5>
        <p>NVIDIA
         Dengan menggunakan gpu dari nvidia komputer akan semakin gaspol.

        Rp. 23500 /hari</p>
        <a href="item/GM006.php" class="btn btn-primary">Check</a>
  </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<br> <!--Type-->
<div class="position-relative container">
<h3>Office and College</h3>
<p>Find laptops and other useful thing to provide your work needs!</p>
<a class="btn btn-primary" href="type-office.php">Go</a>
</div>

<br> <!--Type-->
<div class="position-relative container start-5">
<h3>Gaming and Entertainment</h3>
<p>Holiday is coming and you JUST WANT FUN!</p>
<a class="btn btn-primary" href="type-game.php">Go</a>
</div>
<br>

<!-- Init Footer-->
<?php
include_once './resource/footer.php';
initFooter();
?>

</body>

</html>