<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php

// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");


// memilih Database
mysqli_select_db($conn, "pw_tubes_203040056");

// melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM mobil");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mini Cooper</title>
</head>
<body>

    <h2><center>MINI COOPER COLECTIONS</center></h2>
    <div class="container mb-3 mt-3" >
        <table class="striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Picture</th>
                <th>Type</th>
                <th>Power</th>
                <th>Acceleration</th>
                <th>Fuel Type</th>
                <th>Drive </th>
                <th>Price</th>
            </tr>
        </thead>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="" class="waves-effect brown lighten-2 btn"><i class="material-icons">undo</i>Ubah</a>
                        <a href="" class="waves-effect brown lighten-2 btn"><i class="material-icons">delete</i>Hapus</a>
                    </td>
                    <td>
                        <img src="assets/img/<?= $row["picture"]; ?>">
                    </td>
                    <td><?= $row["name"]; ?></td>
                    <td><?= $row["power"]; ?></td>
                    <td><?= $row["acceleration"]; ?></td>
                    <td><?= $row["fuel"]; ?></td>
                    <td><?= $row["drive"]; ?></td>
                    <td><?= $row["price"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
            
        </table>
    </div>
    
</body>
</html>