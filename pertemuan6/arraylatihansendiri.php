<?php 
$handphone = [
    [
    "merk" => "Samsung Note 10 Lite",
    "ram" => "8 GB",
    "rom" => "128 GB",
    "prosesor" => "Exynos 9810",
    "gambar" => "samsung10.jpg"
    ],
    [
    "merk" => "Xiaomi Mi Note 10",
    "ram" => "6 GB",
    "rom" => "128 GB",
    "prosesor" => "Snapdragon 730G",
    "gambar" => "xiaomimi.jpg"
    ],
    [
    "merk" => "Oppo Find x",
    "ram" => "8 GB",
    "rom" => "256 GB",
    "prosesor" => "Snapdragon 845",
    "gambar" => "oppox.jpg"
    ],
    [   
    "merk" => "Iphone 11 Max Pro",
    "ram" => "4 GB",
    "rom" => "512 GB",
    "prosesor" => "Apple A13 Bionic",
    "gambar" => "iphone11.jpg"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Daftar Smartphone Terbaru</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Daftar Smartphone Terbaru</h1>

        <?php foreach ( $handphone as $hp ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $hp["gambar"]; ?>" alt="">
                </li>
                <li>Merk: <?= $hp["merk"]; ?></li>
                <li>Ram: <?= $hp["ram"]; ?></li>
                <li>Internal: <?= $hp["rom"]; ?></li>
                <li>Prosessor: <?= $hp["prosesor"]; ?></li>
            </ul>


        <?php endforeach; ?>

    </body>
</html>