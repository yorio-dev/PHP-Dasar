<?php

$a=3;
switch ($a)
{
case 0 :
    echo "Angka Nol";
    break;
case 1 :
    echo "Angka Satu";
    break;
case 2 :
    echo "Angka Dua";
    break;
case 3 :
    echo "Angka Tiga";
    break;
case 4 :
    echo "Angka Empat";
    break;
case 5 :
    echo "Angka Lima";
    break;
default :
    echo "Angka diluar jangkauan";
    break;
}




// $a=3;
// switch ($a)
// {
// case 0 :
// case 1 :
// case 2 :
// case 3 :
//     echo "Angka berada di dalam range 0-3";
//     break;
// case 4 :
// case 5 :
// case 6 :
// case 7 :
//     echo "Angka berada di dalam range 4-7";
//     break;
// default :
//     echo "Angka diluar jangkauan";
//     break;
// }




// angka
// $bulan = 5;

// switch ($bulan)
// {
//     case 1 :
//         echo "bulan ini adalah bulan januari";
//     break;
//     case 2 :
//         echo "bulan ini adalah bulan februari";
//     break;
//     case 3 :
//         echo "bulan ini adalah bulan maret";
//     break;
//     case 4 :
//         echo "bulan ini adalah bulan april";
//     break;
//     case 5 :
//         echo "bulan ini adalah bulan mei";
//     break;
//     default :
//         echo "lebih dari 5 bulan";
//     break;
// }



// string
$bulan = "april";

switch ($bulan)
{
    case "januari":
        echo "bulan ini adalah bulan ke 1";
    break;
    case "februari" :
        echo "bulan ini adalah bulan ke 2";
    break;
    case "maret" :
        echo "bulan ini adalah bulan ke 3";
    break;
    case "april" :
        echo "bulan ini adalah bulan ke 4";
    break;
    case "mei":
        echo "bulan ini adalah bulan ke 5";
    break;
    default :
        echo "bukan..! ini adalah bulan juni";
    break;
}