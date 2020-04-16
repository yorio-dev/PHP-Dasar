<?php 
// Pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r -> khusus digunakan untuk mencetak isi array
// var_dump -> digunakan ketika debugging

// Penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel
// variabel itu tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Yo Rio";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung / concatenation / concat
// . 
// $nama_depan = "You";
// $nama_belakang = "Rio";
// echo $nama_depan . " " . $nama_belakang;
// You Rio

// Assignment
// +, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x; 
// 6

// $nama = "You";
// $nama .= " ";
// $nama .= "Rio";
// echo $nama;
// You Rio

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo $nama ?></h1>
</body>
</html>