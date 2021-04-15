<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$mobil = query("SELECT * FROM mobil WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col s12 m7">
        <div class="card">
            <div class="card-image">
            <img src="../assets/img/<?= $mobil["picture"]; ?>" alt="">
            <span class="card-title"><?= $mobil["name"]; ?></span>
            </div>
            <div class="card-content">
                <p><?= $mobil["power"]; ?></p>
                <p><?= $mobil["acceleration"]; ?></p>
                <p><?= $mobil["fuel"]; ?></p>
                <p><?= $mobil["drive"]; ?></p>
                <p><?= $mobil["price"]; ?></p>
            </div>
            <div class="card-action">
            <a href="../index.php" class="waves-effect brown lighten-2 btn"><i class="material-icons">backspace</i> Back</a>
            </div>
        </div>
        </div>
        </div>
    </div>
  </div>
    
</body>
</html>