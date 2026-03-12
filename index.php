<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Toko Baju Kelompok 1</title>

<link rel="stylesheet" href="assets/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="text-center mb-4">Toko Baju Kelompok 1</h2>

<div class="text-center mb-4">
<a href="tambah.php" class="btn btn-primary">Tambah Produk</a>
</div>

<div class="row">

<a href="statistik/grafik.php" class="btn btn-info mb-3">
Lihat Grafik Penjualan
</a>

<?php
$data = mysqli_query($conn,"SELECT * FROM produk");

while($d = mysqli_fetch_array($data)){
?>

<div class="col-md-3 mb-4">

<div class="card product-card">

<img src="images/<?php echo $d['gambar']; ?>" class="card-img-top">

<div class="card-body text-center">

<h5><?php echo $d['nama_baju']; ?></h5>

<p class="price">
Rp <?php echo number_format($d['harga']); ?>
</p>

<p>Stok: <?php echo $d['stok']; ?></p>

<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</body>
</html>