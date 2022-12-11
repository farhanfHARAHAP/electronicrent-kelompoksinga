<?php

include '../db.php';
include 'lib.php';

$userName = $_POST['inputName'];
$userPhone = $_POST['inputPhone'];
$userAddress = $_POST['inputAddress'];

# From Check
function checkIfExist(){
    global $userName, $userPhone, $userAddress;
    if($userName == null){
        return false;
    }else if($userPhone == null){
        return false;
    }else if($userAddress == null){
        return false;
    }
    else{
        return true;
    }
}

# Main
if(checkIfExist()){
    if(checkIfRegistered()){
        header("Location: phone-registered.php"); 
    } else {
        addNewPhone();
    }
} else {
    session_start();
    $_SESSION['errormsg'] = "You must fill all the form!";
    header("Location: register-form.php");
}


?>