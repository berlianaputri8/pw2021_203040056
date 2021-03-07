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
    <title>Latihan1c</title>
    <style>
        .warna {
            width: 30px;
            height: 30px;
            background-color: salmon;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 0 5px 10px 0;
            border-radius: 50%;
            border: 2px solid black;
        }
    </style>
</head>
<body>

    <?php for($i = 1; $i <=3 ; $i++) : ?> 
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="warna"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
               
</body>
</html>