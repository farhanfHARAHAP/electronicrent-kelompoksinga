<html>

<?php
include_once 'resource/html-head.php';
initHead();
?>

<body>

<!-- Init Navbar -->
<?php
include_once 'resource/navbar.php';
initNavBar('./');
?>

<br>
<h3 class="container">Gaming and Entertainment</h3>
<br>
<table class="container">
<tr>
<?php
include 'db.php';
$size = 4;
$count = 1;
$sql = mysqli_query($con, "SELECT * FROM `barang` WHERE `id_barang` LIKE '%GM%'");
while( $hasil = mysqli_fetch_array($sql)){
	if($count <= $size){
?>
<td>
<div class="card" style="width: 18rem;">
  <img src="img/<?=$hasil['icon_url']?>.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$hasil['nama']?></h5>
    <a href="item/<?=$hasil['id_barang']?>.php" class="btn btn-primary">Check</a>
  </div>
</div>
</td>	
<?php
		$count = $count + 1;
	} else {
?>
<td>
<div class="card" style="width: 18rem;">
  <img src="img/<?=$hasil['icon_url']?>.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$hasil['nama']?></h5>
    <a href="item/<?=$hasil['id_barang']?>.php" class="btn btn-primary">Check</a>
  </div>
</div>
</td>
</tr>
<tr>
<?php
		$count = 0;
	}
}
?>
</tr>
</table>

<!-- Init Footer-->
<?php
include_once './resource/footer.php';
initFooter();
?>

</body>

</html>