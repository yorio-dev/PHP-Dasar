<?php 
// $_GET
$mahasiswa = [
    [
        "nama" => "You Rio", 
        "nrp" => "0987465390", 
        "email" => "yorio.co@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "yorioo.jpg"
    ],
    [
        "nama" => "Yoyo Rio", 
        "nrp" => "098742580", 
        "email" => "yoyorio.co@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "yourioo.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
       <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
       </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>