<!-- 
    Berliana Putri
    203040056
    Shift Jum'at (10:00 - 11:00) 
--> 

<?php
    function tumpukanBola($tumpukan) {
        for ($i = 1; $i <= $tumpukan; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class = 'bola'>" . $i . "</div>";
            }
            echo "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .bola {
            width: 30px;
            height: 30px;
            background-color: salmon;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            border-radius: 50%;
            border: 1px solid black;
        }
        .kotak {
            border: 2px solid black;
            width: 200px;
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>

    <div class="kotak">
        <?php echo tumpukanBola(5); ?>
    </div> 
               
</body>
</html>