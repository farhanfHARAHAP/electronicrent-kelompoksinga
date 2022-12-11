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

<br>
<div class="container" style="500px">
    <h3>Payment</h3>
    <br>
    <p>Please purchase with the same amount as seen on checkout section.</p>
    <p>Payment with the right amount will simplify and speed up the verification process.</p>
    <br>
    <img src="../img/BCA.png"
    width="175"
    height="124"/>
    <h5>Bank BCA</h5>
    <p>111.234.0987 - CV. Singa Elektronik</p>
    <br>
    <img src="../img/BNI.png"
    width="150"
    height="43"/>
    <h5>Bank BNI</h5>
    <p>123.444.7890 - CV. Singa Elektronik</p>
    <br>
    <img src="../img/BRI.png"
    width="150"
    height="57"/>
    <h5>Bank BRI</h5>
    <p>12345.23456.345 - CV. Singa Elektronik</p>
    <br>
    <a href="index.php" class="btn btn-primary">Home</a>
    <br>
    <br>
</div>

<!-- Init Footer-->
<?php
include_once './resource/footer.php';
initFooter();
?>

</body>

</html>