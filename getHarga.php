<?php
$harga = 0;
$id = $_GET['id'];
if ($id == 1) {
	$harga = 10000;
} else if ($id == 2) {
	$harga = 15000;
} else if ($id == 3) {
	$harga = 20000;
}
echo $harga;
?>