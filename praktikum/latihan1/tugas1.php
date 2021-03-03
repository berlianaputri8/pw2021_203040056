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
    <title>Tugas1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 2px solid black;
        }

        .warna2 {
            background-color: salmon;
        }

        .warna1 {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 6; $i++) :
        for ($j = 1; $j <= 6; $j++) :

            if ($i % 2 == !0) :
                if ($j % 2 == !0) : ?>
                    <div class="kotak warna1"></div>
                <?php else : ?>
                    <div class="kotak warna2"></div>
                <?php endif; ?>

                <?php else :
                if ($j % 2 == !0) : ?>
                    <div class="kotak warna2"></div>
                <?php else : ?>
                    <div class="kotak warna1"></div>
                <?php endif; ?>
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>
</html>