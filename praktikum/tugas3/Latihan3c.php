<?php 
    //Berliana Putri
    //203040056
    //Shift Jum'at (10:00 - 11:00) 
?>

<?php

$nama = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
        .nama{
            font-family: calibri;
        }
    </style>
</head>
<body class="nama">

   <h3><b>Daftar pemain bola terkenal dan clubnya</b></h3> 
    <table>
        <?php foreach ($nama as $nm => $pemain) : ?>
            <tr>
                <?php echo "<td><b>$nm</b></td>"; ?>
                <td>:</td>
                <td><?= $pemain; ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>
</html>