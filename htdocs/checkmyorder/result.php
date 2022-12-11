<?php

include '../db.php';
$userPhone = $_GET['inputPhone'];
$query = "SELECT * FROM `ledger` WHERE `ledger`.`phone` = '".$userPhone."'";
$sql = mysqli_query($con, $query);

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
<div class="container">
    <h3>Your order</h3>
    <br>
    <table class="table" border="1">
    <thead>
        <th scope="col">Invoice</th>
        <th scope="col">Item</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Paid</th>
        <th scope="col">Returned</th>
    <thead>
    <tbody>
    <?php
    while( $hasil = mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td scope="row"><?=$hasil['invoice']?></td>
        <td scope="row"><?=$hasil['id_barang']?></td>
        <td scope="row"><?=$hasil['start_date']?></td>
        <td scope="row"><?=$hasil['end_date']?></td>
        <td scope="row"><?=$hasil['price']?></td>
        <td scope="row"><?=$hasil['quantity']?></td>
        <td scope="row"><?=$hasil['paid']?></td>
        <td scope="row"><?=$hasil['returned']?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <br>
    <a class="btn btn-secondary" href="form.php">Back</a>
    <br>
    <br>
</div>

</body>

</html>