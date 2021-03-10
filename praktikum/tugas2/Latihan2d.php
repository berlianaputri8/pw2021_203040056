<!-- 
    Berliana Putri
    203040056
    Shift Jum'at (10:00 - 11:00) 
-->

<?php

function hitungDeterminan($a, $b, $x, $y) {
    
    $determinan = (($a * $y) - ($b * $x));
    
    echo "<table style='border-left: 2px solid black; border right: 2px solid black;' cellspacing='5' cellpadding='5'>
        <tr>
            <td>$a</td>
            <td>$b</td>
        </tr>

        <tr>
            <td>$x</td>
            <td>$y</td>
        </tr>

    </table>";

    echo "<p style = padding: 3px;><b>Determinan dari matriks tersebut adalah $determinan </b></p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2d</title>
    <style>
        .hitung {
            border: 1px solid black;
            padding: 5px;
            width: 300px;
            margin: 10px;
        }
    </style>
</head>
<body>

    <div class="hitung">
        <?php hitungDeterminan(1, 2, 3, 4) ?>
    </div>
    
</body>
</html>