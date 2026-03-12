<?php
include "../koneksi.php";

$data = mysqli_query($conn,"SELECT nama_baju, SUM(jumlah) as total_jual 
FROM transaksi 
GROUP BY nama_baju");

$nama = [];
$total = [];

while($d = mysqli_fetch_array($data)){
$nama[] = $d['nama_baju'];
$total[] = $d['total_jual'];
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Grafik Penjualan</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Grafik Penjualan Baju</h2>

<canvas id="grafik"></canvas>

</div>

<script>

var ctx = document.getElementById('grafik').getContext('2d');

var chart = new Chart(ctx, {

type: 'bar',

data: {

labels: <?php echo json_encode($nama); ?>,

datasets: [{

label: 'Jumlah Terjual',

data: <?php echo json_encode($total); ?>,

backgroundColor: 'rgba(54, 162, 235, 0.7)'

}]

}

});

</script>

</body>
</html>