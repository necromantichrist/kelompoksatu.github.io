<?php

include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_baju'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($conn,"UPDATE produk SET 
nama_baju='$nama',
harga='$harga',
stok='$stok'
WHERE id='$id'");

header("location:../index.php");

?>