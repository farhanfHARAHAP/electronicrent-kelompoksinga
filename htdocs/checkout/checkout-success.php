<html>

<!-- Init Head -->
<?php
include_once '../resource/html-head.php';
initHead();
?>
<body>

<!-- Init Navbar -->
<?php
include_once '../resource/navbar.php';
initNavBar('../');
?>

<br>
<div class="container" style="500px">
    <h3>Checkout Success</h3>
    <p>Your order is placed in our database, check your phone for SMS by our admin to complete the payment!</p>
    <a href="../rules.php">Check our company rules here!</a>
    <a href="../payment.php">And check our payment methods here!</a>
    <br>
    <a href="../" class="btn btn-primary">Home</a>
</div>

</body>

</html>