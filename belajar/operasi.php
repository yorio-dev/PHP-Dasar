<?php

// Operand dan operator
// operand itu nilai asal yg digunakan dalam proses operasi
// operator itu intruksinya,.. untuk mendapatkan hasil dari proses operasi
// $a = 5;
// $b = 2;
// $c = 10;
// $d = 1;

// $hasil = ($a + $b) * ($c - $d);
// echo $hasil;


// jenis operator berdasarkan jumlah operand

// Operator Unary -- memiliki satu operand saja 
// digunakan untuk membuata angka positif(+) atau negatif(-) 
// -2 , +4

// Operator Binary --memiliki dua operand
// 5+2, 10*2, 7-3

// Operator Ternary --memiliki 3 operand
// $var = ekspresi1 ? ekspresi2 : ekspresi3

// $hari = "senin";
// echo $hari = (!empty($hari)) ? $hari . "pagi" : "sekarang bukan hari senin";


$file = "test.txt";
echo $file = (file_exists("test.txt")) ? $file . " ada disini" : "file ini tidak ada";