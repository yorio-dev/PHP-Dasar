<?php 
// $mahasiswa = [
//     ["You Ryo", "934873729", "yorio@gmail.com", "Teknik Informatika"],
//     ["Yoyo Rio", "347824729", "yorio.co@gmail.com", "Teknik Industri"]
// ];

// Array Assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "You Rio", 
    "nrp" => "0987465390", 
    "email" => "yorio.co@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "yorio.jpg"
    ],
    [
        "nama" => "Yoyo Rio", 
        "nrp" => "098742580", 
        "email" => "yoyorio.co@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "yourio.jpg"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>

    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama:<?= $mhs["nama"]; ?></li>
        <li>NRP: <?= $mhs["nrp"]; ?></li>
        <li>Email: <?= $mhs["jurusan"]; ?></li>
        <li>Jurusan: <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>

