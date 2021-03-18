<?php

$grup = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => 100,
        "gol" => 76,
        "assist" => 30
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => 120,
        "gol" => 80,
        "assist" => 12
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" =>  87,
        "gol" => 12,
        "assist" => 48
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" =>  90,
        "gol" =>  103,
        "assist" =>  8
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" =>  109,
        "gol" =>  56,
        "assist" => 15
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => 63,
        "gol" => 30,
        "assist" => 70
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => 100,
        "gol" => 10,
        "assist" => 12
    ]
];

$main = 0;
$gol = 0;
$assist = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d</title>
</head>
<body>
<table border="1px solid black" cellpadding="3" cellspacing="0">
        <tr>
            <td><b>NO</b></td>
            <td><b>NAMA</b></td>
            <td><b>CLUB</b></td>
            <td><b>MAIN</b></td>
            <td><b>GOL</b></td>
            <td><b>ASSIST</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($grup as $gr) : ?>
            <tr>
                <td><?= $i ?> </td>
                <td><?= $gr["nama"] ?></td>
                <td><?= $gr["club"] ?></td>
                <td><?= $gr["main"] ?></td>
                <td><?= $gr["gol"] ?></td>
                <td><?= $gr["assist"] ?></td>
            </tr>
            <?php $i++;
            $main += $gr["main"];
            $gol += $gr["gol"];
            $assist += $gr["assist"];
            ?>
        <?php endforeach ?>
        </tr>
        <tr>
            <td>#</td>
            <td colspan="2"><b>
                    <center>Jumlah</center>
                </b></td>
            <td><?= $main  ?></td>
            <td><?= $gol  ?></td>
            <td><?= $assist  ?></td>
        </tr>
    </table>
</body>
</html>