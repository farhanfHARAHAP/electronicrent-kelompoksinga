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

<?php
include '../db.php';
$ID = 'OF001'; #Ganti ID Barang
$sql = mysqli_query($con, "SELECT * FROM `barang` WHERE `id_barang` = '".$ID."'");
while( $hasil = mysqli_fetch_array($sql)){
	$item_nama = $hasil['nama'];
	$item_brand = $hasil['brand'];
	$item_harga = $hasil['harga'];
	$item_desc = $hasil['desc'];
}?>
<br>
<div class="container">
<table>
<tr>
	<td>
		<img border="1" class="container" src="../img/<?=$ID?>.JPG" style="width:300px;height:300px;">
	</td>
	<td class="container position-absolute">		
		<h3><?=$item_nama?></h3>	
		<h4><?=$item_brand?></h4>
		<p style="width:500px"><?=$item_desc?></p>			
		<p></p>
		<h4>Rp. <?=$item_harga?> /hari</h4>
        <form method="POST" action="../checkout/checkout-form.php">
            <input type="hidden" value="<?= $ID ?>" name="idbarang">
		    <input type="Submit" value="Rent" class="btn btn-primary">
        </form>
	</td>
</tr>
</div>

</body>

</html>