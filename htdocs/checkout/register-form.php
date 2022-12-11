<?php
session_start();
?>
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
<div class="container" style="width:500px">
    <form method="POST" action="query-register.php">        
        <div class="form-group">
        <!-- Form Penyewa -->
            <h3>Register</h3>            
            <label>Full Name</label>
            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Full Name">
            <label>Phone</label>
            <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="62812345610">
            <label>Address</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Jl. H. Jaka, Kebayoran Lama">        
            <br>
            <input type="submit" id="submit" class="btn btn-primary" value="Submit">         
            <br>
            <p style="color:red;"><?=$_SESSION['errormsg'];?></p>   
        </div>
    </form>
</div>

</body>
</html>

<?php
session_destroy();
?>