<?php
$mini = [
    [
        "name" => "Mini Cooper 3 Door",
        "power" => "100kW",
        "acceleration" => "7.8 sec. 0-100 km/h",
        "fuel" => "5.3 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 765 Juta",
        "picture" => "mini1.png"
    ],
    [
        "name" => "Mini Cooper S 3 Door",
        "power" => "141kW",
        "acceleration" => "6.7 sec. 0-100 km/h",
        "fuel" => "5.5 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 955 Juta",
        "picture" => "mini2.jpeg"
    ],
    [
        "name" => "Mini Jhon Cooper Works 3 Door",
        "power" => "170kW",
        "acceleration" => "6.1 sec. 0-100 km/h",
        "fuel" => "6 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. Juta",
        "picture" => "mini3.jpeg"
    ],
    [
        "name" => "Mini Cooper 5 Door",
        "power" => "100kW",
        "acceleration" => "8.1 sec. 0-100 km/h",
        "fuel" => "5.4 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 795 Juta",
        "picture" => "mini4.png"
    ],
    [
        "name" => "Mini Cooper S 5 Door",
        "power" => "141kW",
        "acceleration" => "6.8 sec. 0-100 km/h",
        "fuel" => "5.6 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 995 Juta ",
        "picture" => "mini5.jpeg"
    ],
    [
        "name" => "Mini Cooper Cabrio",
        "power" => "100kW",
        "acceleration" => "8.7 sec. 0-100 km/h",
        "fuel" => "5.6 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 865 Juta",
        "picture" => "mini6.png"
    ],
    [
        "name" => "Mini Cooper S Cabrio",
        "power" => "141kW",
        "acceleration" => "7.1 sec. 0-100 km/h",
        "fuel" => "5.7 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 1,30 Juta",
        "picture" => "mini7.jpeg"
    ],
    [
        "name" => "Mini Cooper Clubman",
        "power" => "100kW",
        "acceleration" => "9.2 sec. 0-100 km/h",
        "fuel" => "6 L/100 KM",
        "drive" => "4-wheel",
        "price" => "Rp. 896 Juta",
        "picture" => "mini8.jpeg"
    ],
    [
        "name" => "Mini Cooper S Clubman",
        "power" => "141kW",
        "acceleration" => "7.2 sec. 0-100 km/h",
        "fuel" => "6.2 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 1,05 Milyar",
        "picture" => "mini9.png"
    ],
    [
        "name" => "Mini Cooper Countryman",
        "power" => "100kW",
        "acceleration" => "9.6 sec. 0-100 km/h",
        "fuel" => "6 L/100 KM",
        "drive" => "2-wheel",
        "price" => "Rp. 735 Juta",
        "picture" => "mini10.jpeg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Mini Cooper</title>
    <style>
        .container{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-success table-striped">
            <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Type</th>
                    <th scope="col">Power</th>
                    <th scope="col">Acceleration</th>
                    <th scope="col">Fuel Type</th>
                    <th scope="col">Drive </th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($mini as $mn) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <img src="img/<?= $mn["picture"]; ?>">
                    </td>
                    <td><?= $mn["name"]; ?></td>
                    <td><?= $mn["power"]; ?></td>
                    <td><?= $mn["acceleration"]; ?></td>
                    <td><?= $mn["fuel"]; ?></td>
                    <td><?= $mn["drive"]; ?></td>
                    <td><?= $mn["price"]; ?>
                        <button type="button" class="btn btn-success">Buy Now</button>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
</body>