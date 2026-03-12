<?php

include "../koneksi.php";

$nama = $_POST['nama_baju'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp,"../images/".$gambar);

mysqli_query($conn,"INSERT INTO produk (nama_baju,harga,stok,gambar) 
VALUES ('$nama','$harga','$stok','$gambar')");

header("location:../index.php");

?>