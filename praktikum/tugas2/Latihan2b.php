<!-- 
    Berliana Putri
    203040056
    Shift Jum'at (10:00 - 11:00) 
-->

<?php

$jawabanIsset = "Isset adalah = fungsi yang menghasilkan nilai true jika sebuah variabel telah didefenisikan, dan false jika variabel tersebut belum dibuat. <br><br>";
$jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk mengecek data atau variabel yang kosong. ";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;

function soal ($style){
    echo "<div class = $style>
    " .$GLOBALS['isset'] . " 
    " .$GLOBALS['empty'] . "
    </div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
        .tulisan {
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
            font-size: 15px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <?php
        echo soal("tulisan");
    ?>
    
</body>
</html>