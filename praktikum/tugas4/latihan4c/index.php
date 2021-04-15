<?php 
    //Berliana Putri
    //203040056
    //Shift Jum'at (10:00 - 11:00) 
?>

<?php

    require 'php/functions.php';

    $mobil = query("SELECT * FROM mobil")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Mini Cooper</title>
</head>
<body>

    <h2><center>MINI COOPER COLECTIONS</center></h2>
    <div class="container">
        <?php foreach ($mobil as $mb) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?=$mb['id'] ?>">
                <?= $mb["nama"] ?>
                </a>
            </p>
        <?php endforeach ?>       
    </div>
    
</body>
</html>
