<?php 

// Assignment by Value
// $a = 20;
// $b = 15;
// $c = 5; 
 
// echo "$a = $a, $b = $b, $c = $c";
// echo "<br />";
 
// $a = $b = $c+5;
// echo "$a = $a, $b = $b, $c = $c";



// Assignment Array
// $menu = [
//     "menu1" => "Nasi goreng",
//     "menu2" => "Mie Goreng",
//     "menu3" => "Capcay"
// ];


// Assignment by Reference
$a = 20;
$b = $a;
 
echo "$a = $a, $b = $b";
echo "<br />";
 
$a = $a + 5;
echo "$a = $a, $b = $b";
echo "<br />";      
 
$b = $b + 10;
echo "$a = $a, $b = $b";


