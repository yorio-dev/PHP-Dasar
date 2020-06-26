<?php

// Barang tersedia
$hargaRoti = 5000;
$jamTangan = 50000;

// Uang pembeli
$uang = 20000;

// Untuk belanjaan roti
// $jumlahPembelianRoti = 4;
$jumlahPembelianRoti2 = 4;
// $totalBelanjaRoti = ($hargaRoti * $jumlahPembelianRoti);
$totalBelanjaRoti2 = ($hargaRoti * $jumlahPembelianRoti2);
$minBelanjaRoti = 20000;
$diskon2 = $totalBelanjaRoti2 * (15/100);
// $diskon = $totalBelanjaRoti * (15/100); #diskon 15%
// $totalPembayaranRoti = ($totalBelanjaRoti - $diskon);
$totalPembayaranRoti2 = ($totalBelanjaRoti2 - $diskon2);
// $kembalianRoti = ($uang - $totalPembayaranRoti);
$kembalianRoti2 = ($uang - $totalPembayaranRoti2);
$kembalianNoDiskon = ($uang - $totalBelanjaRoti2);


// Untuk belanjaan jam tangan
$jumlahPembelianJamTangan = 2;  
$totalPembelianJamTangan = ($jamTangan * $jumlahPembelianJamTangan);
$minBelanjaJam = 50000;
$diskonJam = $totalPembelianJamTangan * (30/100);
$totalPembayaranJam = ($totalPembelianJamTangan - $diskonJam);
$kembalianJam = ($uang - $totalPembayaranJam);

// Untuk belanjaan 2 barang
$totalDuaBarang = ($totalPembelianJamTangan + $totalBelanjaRoti2);
$kembalianDuaBarang = ($uang - $totalDuaBarang);




// Pembelian Roti
// if ( $totalBelanjaRoti >= $minBelanjaRoti) {
//     echo "Anda membeli $jumlahPembelianRoti roti, total belanja roti anda Rp.$totalBelanjaRoti, Selamat anda mendapat diskon 15%, Jadi total pembayarannya adalah Rp.$totalPembayaranRoti ";
//     echo "<br>";
//     echo "Uang anda Rp.$uang, total kembalian adalah Rp.$kembalianRoti";
// } else {
//     echo "Total belanja anda Rp.$totalBelanjaRoti, Anda tidak mendapat diskon.";
//     echo "<br>";
// }
// echo "<br> <br>";


// Pembelian Dua Barang
// if ( $uang >= ($totalPembelianJamTangan + $totalBelanjaRoti2)) {
//     echo " Anda membeli $jumlahPembelianJamTangan jam tangan seharga Rp.$totalPembelianJamTangan dan $jumlahPembelianRoti2 roti seharga Rp.$totalBelanjaRoti2, Jadi total belanja anda Rp.$totalDuaBarang";
//     echo "<br>";
//     echo " Uang anda Rp.$uang, total kembalian adalah Rp.$kembalianDuaBarang";
//     echo "<br> <br>";

//     $uangSisa = $kembalianDuaBarang;
//     $kembalianJam = ($uangSisa - $totalPembayaranJam);

//     if ( $uangSisa >= $minBelanjaJam ) {
//         echo "Anda membeli $jumlahPembelianJamTangan jam tangan, total belanja anda Rp.$totalPembelianJamTangan, Selamat anda mendapat diskon 30%, Jadi total pembayarannya adalah Rp.$totalPembayaranJam"; 
//         echo "<br>";
//         echo "Uang anda Rp.$uangSisa, total kembalian adalah Rp.$kembalianJam";
//     } else {
//         echo "Uang anda tidak cukup untuk membeli Jam tangan, tapi masih cukup untuk beli Roti.";
//     }
// } else {
//     echo "Anda tidak dapat membeli sesuatu";
// }




// Pembelian jam tangan
// if ( $uang >= $totalPembelianJamTangan){
//     echo " Anda membeli $jumlahPembelianJamTangan jam tangan seharga Rp.$totalPembelianJamTangan, anda mendapat diskon 30%, Jadi total pembayarannya adalah Rp.$totalPembayaranJam";
//     echo "<br>";
//     echo " Uang anda Rp.$uang, total kembalian adalah Rp.$kembalianJam";
// } else {
//     echo "Uang anda tidak cukup untuk pembelian ini, silahkan ambil duit lagi.";
// }






// Pembelian Roti2
if ( $uang >= $totalBelanjaRoti2 ) {

    if ($totalBelanjaRoti2 >= $minBelanjaRoti) {
        echo "Anda membeli $jumlahPembelianRoti2 roti seharga Rp.$totalBelanjaRoti2, Selamat anda mendapat diskon 15%. Jadi total pembayarannya adalah Rp.$totalPembayaranRoti2";
        echo "<br>";
        echo "Uang anda Rp.$uang, total kembalian adalah Rp.$kembalianRoti2";
    } else {
        echo "Anda membeli $jumlahPembelianRoti2 roti seharga Rp.$totalBelanjaRoti2, tidak ada diskon untuk pembelian ini. Jadi total pembayarannya adalah Rp.$totalBelanjaRoti2";
        echo "<br>";
        echo "Uang anda Rp.$uang, total kembalian adalah Rp.$kembalianNoDiskon";
    }
} else {
    echo "Uang anda tidak cukup untuk pembelian ini, silahkan ambil duit lagi.";
}









// $d = 20000 * (15/100);
// echo $d;


