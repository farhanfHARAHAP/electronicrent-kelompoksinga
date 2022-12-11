<?php
include 'lib.php';
session_start();

$idbarang = $_POST['idbarang'];
if(!isset($idbarang)){
    $idbarang = $_SESSION['idbarang'];
}
$_SESSION['idbarang'] = $idbarang;
$itemName = "";
$itemQuantity = "";
$itemPrice = "";
$itemIcon = "";
askItem();
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
    <form method="POST" action="checkout-confirmation.php">        
        <div class="form-group">
        <!-- Form Penyewa -->
            <h3>Checkout</h3>                        
            <label>Registered Phone</label>            
            <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="62812345610">   
            <a href="register-form.php"><small>Didnt register yet?</small> </a>         
        <br>
        <!-- Form Sewa -->
            <br border="1">            
            <h5>Item wished to rent:</h5>
            <br>
            <h4><?=$itemName; ?></h4>            
            <image width="200px" height="200px" src="../img/<?=$itemIcon;?>.JPG">
            <br>
            <h4>Rp.<?=$itemPrice;?> / Day</h4>
            <br>      
            <br>                         
            <label>Start Date</label> <!-- Start Date -->
            <table>
                <tr>
                    <td> <!-- Day -->
                    <input type="text" class="form-control" name="startDay" placeholder="DD">        
                    </td>   
                    <td> <!-- Month -->
                    <input type="text" class="form-control" name="startMonth" placeholder="MM">        
                    </td> 
                    <td> <!-- Year -->
                    <input type="text" class="form-control" name="startYear" placeholder="YYYY">        
                    </td>                      
            </table>
            <br>
            <label>End Date</label> <!-- End Date -->
            <table>
                <tr>
                    <td> <!-- Day -->
                    <input type="text" class="form-control" name="endDay" placeholder="DD">        
                    </td>   
                    <td> <!-- Month -->
                    <input type="text" class="form-control" name="endMonth" placeholder="MM">        
                    </td> 
                    <td> <!-- Year -->
                    <input type="text" class="form-control" name="endYear" placeholder="YYYY">        
                    </td>                      
            </table>
            <a href="../rules.php">Read corporation rules here!</a>
            <br>
            <br>
            <label>Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="1">
            <small>Available <?=$itemQuantity?> pcs</small>   
            <br><br>
            <input type="submit" id="submit" class="btn btn-primary" value="Next">            
        </div>
        <?php
            $errormsg = $_SESSION['errormsg'];
            if(isset($errormsg)){
                ?>
                <br>
                <p style="color:red"><?=$errormsg?></p>             
                <?php
                $_SESSION['errormsg'] = "";
            }
        ?>
    </form>
</div>

</body>
</html>