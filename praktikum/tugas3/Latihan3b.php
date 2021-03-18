<?php 
    //Berliana Putri
    //203040056
    //Shift Jum'at (10:00 - 11:00) 
?>

<?php

$nama = [
        "Mohammad Salah",
        "Cristiano Ronaldo", 
        "Lionel Messi", 
        "Zlatan Ibrahimovic", 
        "Neymar Jr"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
    <style>
        .nama{
            font-family: calibri;
        }
    </style>
</head>

<body class="nama">

    <h3><b>Daftar pemain bola terkenal</b></h1>
    <ol>
        <?php foreach ($nama as $nm) {
            echo "<li>$nm</li>";
        }
        ?>
    </ol>    

    <?php
        $nama[] = "Luca Modric";
        $nama[] = "Sadio Mane";
        sort($nama);
    ?>   
    <h3><b>Daftar pemain bola terkenal baru</b></h1>
    <ol>
        <?php foreach ($nama as $nm) {
            echo "<li>$nm</li>";
        }
        ?>
    </ol>
    
</body>
</html>
