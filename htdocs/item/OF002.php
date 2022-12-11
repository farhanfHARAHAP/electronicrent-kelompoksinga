<html>

<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="../resource/style.css">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>

<!-- Init Navbar -->
<?php
include_once '../resource/navbar.php';
initNavBar('../');
?>

<?php
include '../db.php';
$ID = 'OF002'; #Ganti ID Barang
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
		<a class="btn btn-primary">Checkout</a>
	</td>
</tr>
</div>

</body>

</html>