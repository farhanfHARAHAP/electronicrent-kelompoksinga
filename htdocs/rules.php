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
    <h3>Company Rules</h3>
    <br>
    <h4>About Rent</h4>
    <p>1. You must rent for at least 2 (two) days</p>
    <p>2. In order for our company can prepare the item you wish, start date gap is a day after the order date.</p>
    <p>3. You have to rent at least 1 item</p>
    <p>4. You can only buy one type of item at once</p>
    <p>5. Please purchase with the same amount as seen on checkout section. Payment with the right amount will simplify and speed up the verification process.</p>
    <br>
    <h4>About Customer Service and Admin</h4>
    <p>Our CS and Admin is on service everyday from 7 AM to 9 PM</p>
    <br>
    <h4>Frequently Asked Question(s)</h4>
    <h5>"I didn't receive any SMS after ordering"</h5>
    <p>It is because our admin currently offline (not in service), if you still have this issue after 2 days, please call 08145679910</p>
    <h5>"Where do i have to pay?"</h5>
    <p>You can check it on the <a href="../payment.php">Payment</a> section</p>
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