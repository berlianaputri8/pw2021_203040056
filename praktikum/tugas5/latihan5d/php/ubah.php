<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php
require 'functions.php';

$id = $_GET['id'];
$mb = query("SELECT * FROM mobil WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mini Cooper Ubah</title>
</head>
<body>

<h2><center>Form Ubah Data Mobil</center></h2>
<div class="container">
<form action="" method="post">
	<ul>
        <input type="hidden" name="id" id="id" value="<?= $mb['id'];?>"><br><br>
        
		<li>
			<label for = "name">Type</label><br>
			<input type="text" name="name" id="name" required value="<?= $mb['name']; ?>"><br><br>
		</li>
		<li>
			<label for = "power">Power</label><br>
			<input type="text" name="power" id="power" required value="<?= $mb['power']; ?>"><br><br>
		</li>
		<li>
			<label for = "acceleration">Acceleration</label><br>
			<input type="text" name="acceleration" id="acceleration" required value="<?= $mb['acceleration']; ?>"><br><br>
		</li>
		<li>
			<label for = "fuel">Fuel Type</label><br>
			<input type="text" name="fuel" id="fuel" required value="<?= $mb['fuel']; ?>"><br><br>
		</li>
		<li>
			<label for = "drive">Drive</label><br>
			<input type="text" name="drive" id="drive" required value="<?= $mb['drive']; ?>"><br><br>
		</li>
		<li>
			<label for = "price">Price</label><br>
			<input type="text" name="price" id="price" required value="<?= $mb['price']; ?>"><br><br>
		</li>
        <li>
			<label for = "picture">Picture</label><br>
			<input type="text" name="picture" id="picture" required value="<?= $mb['picture']; ?>"><br><br>
		</li>

		<br>
		<button class="btn waves-effect brown lighten-2" type="submit" name="action">Tambah Data
			<i class="material-icons right">send</i>
		</button>
		<button class="btn waves-effect brown lighten-2" type="submit" name="action"><a href="../index.php">Kembali</a>
			<i class="material-icons right">arrow_back</i>
		</button>
		
	</ul>
    </div>
</body>
</html>