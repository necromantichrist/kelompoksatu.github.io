<!DOCTYPE html>
<html>
<head>

<title>Tambah Produk</title>

<link rel="stylesheet" href="../assets/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Tambah Produk Baju</h2>

<form action="proses/proses_tambah.php" method="POST" enctype="multipart/form-data">
    
<div class="mb-3">
<label>Nama Baju</label>
<input type="text" name="nama_baju" class="form-control" required>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control" required>
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control" required>
</div>

<div class="mb-3">
<label>Gambar</label>
<input type="file" name="gambar" class="form-control" accept="image/*" required>
</div>

<button type="submit" class="btn btn-success">
Simpan Produk
</button>

</form>

</div>

</body>
</html>