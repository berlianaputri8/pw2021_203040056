<!-- 
    Berliana Putri
    203040056
    Shift Jum'at (10:00 - 11:00) 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a</title>
    <style>
        .tulisan{
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            padding: 5px ;
        }
        .kotak{
            padding: 8px ;
            border: 1px solid black;
            box-shadow: 2px 2px 3px 3px grey;
            border-radius: 5px ;
        }
    </style>
</head>
<body>

    <?php 

    function gantiStyle($tulisan, $style1, $style2){
        echo "
            <div class = '$style1'>
            <h3 class = '$style2'><i><b>$tulisan<b></i></h3>
       </div>";
    }
    ?>

    <?php
    echo gantiStyle("Selamat datang di praktikum PW", "tulisan", "kotak");

    ?>

</body>
</html>
