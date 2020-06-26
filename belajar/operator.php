<?php

// Operator Aritmatika
// $hasil1= -3;
// $hasil2=3+5;
// $hasil3=8-4.5;
// $hasil4=2*5;
// $hasil5=3+8/2-3;
// $hasil6=10 % 4;
 
// echo "$hasil1:"; var_dump($hasil1); 
// echo "<br \>";                   
// echo "$hasil2:"; var_dump($hasil2); 
// echo "<br \>";
// echo "$hasil3:"; var_dump($hasil3); 
// echo "<br \>";
// echo "$hasil4:"; var_dump($hasil4); 
// echo "<br \>";
// echo "$hasil5:"; var_dump($hasil5); 
// echo "<br \>";
// echo "$hasil6:"; var_dump($hasil6);



// Operator String
// $a = "satu ";
// $b = "dua ";
// $c = "tiga ";
// $hasil1 = "ini adalah urutan angka ".$a.$b.$c;   #--> concatenation dengan titik(.)
// $hasil2 = "ini adalah urutan angka {$a}{$b}{$c}";  #--> concatenation dengan kurung kurawal( {} )
// $hasil3 = "ini adalah urutan angka $a$b$c";    #--> penulisan langsung, tapi harus menggunakan double quote
// echo $hasil1;
// echo "<br>";
// echo $hasil2;
// echo "<br>";
// echo $hasil3;


// Operator Logika
$hasil1 = true and false;
echo '$hasil1 = ';
echo var_dump($hasil1)."<br/>"; 
 
$hasil2 = (true and false);
echo '$hasil2 = ';  
echo var_dump($hasil2)."<br/>"; 
 
$hasil3 = (true xor false);
echo '$hasil3 = ';
echo var_dump($hasil3)."<br/>"; 
 
$hasil4 = (false or true && false);
echo '$hasil4 = ';
echo var_dump($hasil4)."<br/>";  
 
$a=true;
$b=false;
$hasil5 = ($a and $b || $a or $b);
echo '$hasil5 = ';
echo var_dump($hasil5); 