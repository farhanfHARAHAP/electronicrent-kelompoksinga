<?php
include '../db.php';
session_start();

#From checkout-form.php
$userPhone = $_SESSION['inputPhone'];
$idbarang = $_SESSION['idbarang'];
$price = $_SESSION['price'];
$startdate = $_SESSION['startdate'];
$enddate = $_SESSION['enddate'];
$quantity = (int) $_SESSION['quantity'];

#Functions
function makeInvoice(){
    global $con;
    $query = "SELECT max(`invoice`) as `latest` FROM `ledger`";
    $sql = mysqli_query($con, $query);
    $hasil = mysqli_fetch_array($sql);
    return (int) $hasil['latest'];
}

function updateItemQuantity(){
    global $con, $idbarang, $quantity;
    $query = "SELECT `av_quantity` as `q` FROM `barang` WHERE `id_barang` = '".$idbarang."'";
    $sql = mysqli_query($con, $query);
    $hasil = mysqli_fetch_array($sql);
    $oldquantity = (int) $hasil['q'];
    $newquantity = $oldquantity - $quantity;
    $query = "UPDATE `barang` SET `av_quantity`= '".$newquantity."' WHERE `id_barang` = '".$idbarang."'";
    $sql = mysqli_query($con, $query);
}

function insertLedger(){
    global $con,$userPhone,$idbarang,$price,$startdate,$enddate,$quantity;

    $invoice = makeInvoice() + 1;
    $query = "INSERT INTO `ledger`(`invoice`, `phone`, `id_barang`, `start_date`, `end_date`, `price`, `returned`, `paid`, `quantity`) VALUES ('".$invoice."','".$userPhone."','".$idbarang."','".$startdate."','".$enddate."','".$price."','0','0','".$quantity."')";
    $sql = mysqli_query($con, $query);
    $hasil = mysqli_fetch_array($sql);
}

# Main
insertLedger();
updateItemQuantity();
header("Location: checkout-success.php"); 
session_destroy();

?>