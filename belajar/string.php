<?php 


// $string1='Ini adalah string sederhana';
 
// $string2='Ini adalah string
// yang bisa memiliki beberapa
// baris';
 
// $string3='Dia berkata: "I\'ll be back"';
// //Note: kenapa ada backslash didalam string nya, karena ada tanda petik satu didalam string, jadi agar string tidak bartabrakan atau tertukar atau dianggap string penutup, maka harus didahului backslash sebelum petik pada kalimat
// $string4='Anda telah berhasil menghapus C:\xampp\htdoc';
 
// $string5='Kalimat ini tidak akan pindah ke: \n baris baru';
 
// $string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';
 
// echo $string1; echo "<br>";
// echo $string2; echo "<br>";
// echo $string3; echo "<br>";
// echo $string4; echo "<br>";
// echo $string5; echo "<br>";
// echo $string6;




$string1="Ini adalah string sederhana";
 
// $string2="Ini adalah string<br> yang bisa memiliki beberapa<br> baris,<br> ini baris baru,<br> ini juga baris baru lagi,";
 
$string3="Dia berkata: \"I'll be back\"";
 
// $string4="Anda telah berhasil menghapus C:\\xampp\htdoc";
// // kenapa hasil di web nya jadi 'mpp', karena '\x' adalah sebuah karakter khusus dari ASCII
// // solusi: memberikan dua backslash sebelum xampp (tulisan aslinya satu).
 
// $string5="Kalimat ini akan akan pindah ke: \n baris baru";
 
$string6="Variabel akan otomatis ditampilkan: $string1 dan $string3";
 
// echo $string1; echo "<br \>";
// echo $string2; echo "<br \>";
// echo $string3; echo "<br \>";
// echo $string4; echo "<br \>";
// echo $string5; echo "<br \>";
echo $string6;

// bedanya dengan single quoted adalah -> single quoted tidak bisa dimasuki karakter khusus didalamnya, sedangkan double qouted bisa


// tipe data string heredoc
// $IPK=3.9;
// $string1 = <<<tamat
// Saya sedang belajar PHP
// di duniailkom.com <br />
// Kali ini tentang pembahasan
// mengenai "PHP", <br /> dan berharap
// bisa dapat IPK $IPK :)
// tamat;
 
// echo $string1;


// Nowdoc
// $IPK=3.9;
// $string1 = <<<'end'
// Saya sedang belajar PHP
// di \n duniailkom.com <br />
// Kali ini tentang pembahasan
// mengenai "PHP", <br /> dan berharap
// bisa dapat IPK $IPK :)
// end;
 
// echo $string1;

// penulisan hampir sama kyk heredoc, bedanya cuma pada tanda akhir string diberi single quoted
// hukumnya sama seperti single quoted (tidak bisa dimasuki karakter khusus)