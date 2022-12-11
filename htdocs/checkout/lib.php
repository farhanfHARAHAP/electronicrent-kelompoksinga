<?php
include '../db.php';

function askInfo(){
    global $userPhone, $con, $userAddress, $userName; #Must global
    $query = "SELECT * FROM `penyewa` WHERE `phone` = '".$userPhone."'";    
    $sql = mysqli_query($con, $query);
    $hasil = mysqli_fetch_array($sql);    
    $userName = $hasil['name'];
    $userAddress = $hasil['alamat'];
}

function checkIfRegistered(){
    global $userPhone, $con; #Must global
    $query = "SELECT `phone` FROM `penyewa` WHERE `phone` = '".$userPhone."'";    
    $sql = mysqli_query($con, $query);
    $hasil = mysqli_fetch_array($sql);    
    if($hasil['phone'] == $userPhone){                      
        return true;
    } else {
        return false;
    }
}

function addNewPhone(){
    global $userName, $userAddress, $userPhone, $con; #Must global
    $query = "INSERT INTO `penyewa`(`phone`, `name`, `alamat`) VALUES ('".$userPhone."','".$userName."','".$userAddress."' )";
    $sql = mysqli_query($con, $query);

    if(checkIfRegistered()){
        header("Location: register-success.php");        
    } else {
        echo "Failure";
    }
}

function askItem(){
    global $idbarang, $itemName, $itemQuantity, $itemPrice, $itemIcon, $con;
    $query= "SELECT `id_barang`, `nama`, `brand`, `type`, `harga`, `icon_url`, `av_quantity`, `desc` FROM `barang` WHERE `id_barang` = '".$idbarang."'";
    $sql = mysqli_query($con, $query);
    $hasil = mysqli_fetch_array($sql);
    $itemName = $hasil['nama'];
    $itemQuantity = $hasil['av_quantity'];
    $itemPrice = $hasil['harga'];
    $itemIcon = $hasil['icon_url'];
}

?>