<?php
include_once 'lib.php';
session_start();

# User Info
    $userPhone = $_POST['inputPhone'];
    $userName = "";
    $userAddress = "";
    $_SESSION['inputPhone'] = $userPhone;
    if(checkIfRegistered()){
        askinfo();
    } else {
        $_SESSION['errormsg'] = "Register your phone number first!";
        header('Location: register-form.php');
}

function isFormRight(){
        global $s1,$s2,$s3,$e1,$e2,$e3;
        if($s1 <= 0){
            return false;    
        }else if($s2 <= 0){
            return false;    
        }else if($s3 <= 0){
            return false;    
        }else if($e1 <= 0){
            return false;    
        }else if($e2 <= 0){
            return false;    
        }else if($e3 <= 0){
            return false;    
        }else{
            return true;
        }
}

function checkDateIfIsRight(){
        global $startdate, $enddate, $dayscount, $con;
        $query = "SELECT IF(CURRENT_DATE<'".$startdate."','1','2') as `check1`, DATEDIFF('".$enddate."','".$startdate."') as `check2`, DATEDIFF('".$startdate."',CURRENT_DATE) as `check3`";
        $sql = mysqli_query($con, $query);
        $hasil = mysqli_fetch_array($sql);

        $check1 = (int) $hasil['check1'];
        $dayscount = (int) $hasil['check2'];
        $check3 = (int) $hasil['check3'];
        
        if($check1 == 2){            
            return false;
        } else if(!$dayscount>0){ # Have to rent more than 1 days
            return false;
        }else if(!$check3>=1){ # Have to start min. 1 day after order
            return false;
        }else {
            return true;
        }
}

while(true){
    # Period info
    $s1 = (int) $_POST['startYear']; $e1 = (int) $_POST['endYear'];
    $s2 = (int) $_POST['startMonth']; $e2 = (int) $_POST['endMonth'];
    $s3 = (int) $_POST['startDay']; $e3 = (int) $_POST['endDay'];
    
    if(!isFormRight()){
        $_SESSION['errormsg'] = "Please input numbers for the dates!";
        $_SESSION['idbarang'] = $_SESSION['idbarang'];        
        header('Location: checkout-form.php');
        break;
    }else{
        true;
    }
    $startdate = "".$s1."-".$s2."-".$s3."";
    $_SESSION['startdate'] = $startdate;
    $enddate = "".$e1."-".$e2."-".$e3."";
    $_SESSION['enddate'] = $enddate;
    $dayscount = ""; # Check Date
    
    if(!checkDateIfIsRight()){
        $_SESSION['errormsg'] = "Input valid date! Please read the corporation rules!<br>".$dayscount;
        $_SESSION['idbarang'] = $_SESSION['idbarang'];
        header('Location: checkout-form.php');
        break;
    } else {
        true;
    }



    # Stuff Info
    $idbarang = $_SESSION['idbarang'];
    $_SESSION['idbarang'] = $_SESSION['idbarang'];
    $itemName = "";
    $itemQuantity = "";
    $itemPrice = "";
    $itemIcon = "";
    askItem();
    $quantity = $_POST['quantity'];
    if($quantity > $itemQuantity){ # Check if quantity is right
        $_SESSION['errormsg'] = "Quantity exceed available!";
        $_SESSION['idbarang'] = $_SESSION['idbarang'];
        header('Location: checkout-form.php');
    } else if ($quantity < 1){
        $_SESSION['errormsg'] = "Quantity at least 1!";
        $_SESSION['idbarang'] = $_SESSION['idbarang'];
        header('Location: checkout-form.php');
    } else {
        true;
    }
    $totalPrice = $itemPrice * $dayscount * $quantity;
    $_SESSION['price'] = $totalPrice;
    $_SESSION['quantity'] = $quantity;
    break;
}
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
<div class="container" style="500px">
    <h3>Confirm your order</h3>
    <h5>Rent by</h5>
    <h6>Name: <?=$userName; ?></h6>
    <h6>Phone: <?=$userPhone; ?></h6>
    <h6>Address: <?=$userAddress; ?></h6>
    <br>
    <h5>Item wished to rent:</h5>    
    <h4><?=$itemName; ?></h4>            
    <image width="200px" height="200px" src="../img/<?=$itemIcon;?>.JPG">
    <br>
    <h4>Rp.<?=$itemPrice;?> / Day</h4>    
    <br>
    <table style="width:300px"><tr>
        <td><label class="form-label">Start Date</label>
        <input class="form-control" type="text" value="<?= $startdate; ?>" disabled></td>
        <td><label class="form-label">End Date</label>
        <input class="form-control" type="text" value="<?= $enddate; ?>" disabled> </td>
    </tr></table>   
    <!-- Calculation -->
    <br>
    <h5>You have to pay:</h5>
    <h4>Per day: Rp.<?=$itemPrice?></h4>
    <h4>For <?=$dayscount?> days and <?=$quantity?> pcs</h4>
    <h4>Total: Rp. <?=$totalPrice?></h4>
    <br>
    <br>
    <table><tr>
    <td><a class="btn btn-primary" href="query-ledger.php">Confirm</a></td>
    <td><a class="btn btn-secondary" href="checkout-form.php">Back</a></td>
    </tr></table>
</div>
<br><br><br>

</body>

</html>