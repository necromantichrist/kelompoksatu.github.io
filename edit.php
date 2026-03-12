<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM produk WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Edit Produk</h2>

<form action="proses/proses_edit.php" method="POST">

<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

<div class="mb-3">
<label>Nama Baju</label>
<input type="text" name="nama_baju" value="<?php echo $d['nama_baju']; ?>" class="form-control">
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" value="<?php echo $d['harga']; ?>" class="form-control">
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" value="<?php echo $d['stok']; ?>" class="form-control">
</div>

<button type="submit" class="btn btn-success">Update</button>

</form>

</body>
</html>