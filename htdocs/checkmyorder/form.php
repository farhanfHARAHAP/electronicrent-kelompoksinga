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
<div class="container form-group">
    <h3>Check your order here</h3>
    <br>
    <form method="GET" action="result.php">
        <label class="form-label">Input your registered phone number</label>
        <input type="text" class="form-control" name="inputPhone" placeholder="6212345678910">
        <br>
        <input type="submit" class="btn btn-primary" value="Check">
    </form>
</div>

</body>

</html>