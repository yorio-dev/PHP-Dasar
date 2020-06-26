<?php
// // //pembuatan fungsi
// function perkalian($angka1, $angka2)
// {
//    $a= $angka1;
//    $b= $angka2;
//    $hasil= $a*$b;    
//    return $hasil;
// }
 
// //pemanggilan fungsi
// $hasil = perkalian(4,5);
// echo "Perkalian 4 x 5 adalah $hasil";
// echo "<br />";
// echo "Perkalian 7 x 2 adalah ".perkalian(7,2);



// // //pemanggilan fungsi
// echo "Luas Lingkaran dengan jari-jari 7cm = ".luas_lingkaran(7)."cm";
 
// //pembuatan fungsi
// function luas_lingkaran($jari2)
// {
//    return M_PI*$jari2*$jari2;
// }




// // variable scope
// $a = 5;
 
// function coba()
// {
//    $a=10;
//    $b=7;
// }
 
// // pemanggilan fungsi coba()
// coba();
// echo $a; // 5
// echo $b; // error:notice


// Global
// $a = 7;
 
// function coba()
// {
//    global $a;
//    global $b;
//    $b=15;
//    echo $a;  //7
//    echo $b;  //15
// }
 
// coba();
// echo "<br>";
// echo $a; //7
// echo $b; //15




// // Static
// function coba_lagi()
// {
//    static $a=0;
//    $a=$a+1;
//    return "Ini adalah pemanggilan ke-$a fungsi coba_lagi() <br />";
// }
  
// echo coba_lagi();
// echo coba_lagi();
// echo coba_lagi();
// echo coba_lagi();


// // mengecek tipe data argumen
// function pangkat($nilai, $pangkat)
// {
//     if (is_numeric($nilai) AND is_int($pangkat))
//    {
//        $hasil=1;
//        for ($i=1;$i<=$pangkat;$i++)
//        {
//          $hasil=($hasil*$nilai);
//         }
//        return $hasil;
//     }
//     else
//     {             
//        return "Tipe data argumen harus berupa angka";
//     }
// }
 
// //Test beberapa kasus inputan untuk fungsi pangkat()
// echo pangkat(5,2);
// echo "<br />";
// echo pangkat(5.6,2);
// echo "<br />";
// echo pangkat(2,8);
// echo "<br />";
// echo pangkat(5,2.9);
// echo "<br />";
// echo pangkat("lima",2);
// echo "<br />";




// // default parameter
// function pangkat($nilai, $pangkat=2)
// {
//    $hasil=1;
//    for ($i=1;$i<=$pangkat;$i++)
//    {
//       $hasil=$hasil*$nilai;
//    }
//    return $hasil;
// }
 
// //Test beberapa kasus inputan untuk fungsi pangkat()
// echo "pangkat(5) = ".pangkat(5);
// echo "<br />";
// echo "pangkat(3) = ".pangkat(3);
// echo "<br />";
// echo "pangkat(2,8) = ".pangkat(2,8);
// echo "<br />";
// echo "pangkat(3.5,3) = ".pangkat(3.5,3);
// echo "<br />";





// // variable parameter
// function penambahan()
// {
//    //ambil variable parameter
//    $array_argumen = func_get_args();
//    $jumlah_argumen = func_num_args();
//    $nilai_argumen_ke_2 = func_get_arg(1); //index dimulai dari 0
 
//    //tampilkan hasil variable parameter
//    echo "Jumlah argumen: $jumlah_argumen";
//    echo "<br />";
 
//    echo "Nilai argumen ke-2: $nilai_argumen_ke_2";
//    echo "<br />";
 
//    echo "Array Argumen: ";
//    var_dump($array_argumen);
 
//    echo "<br />";
//    echo "<br />";
//    return;
// }
 
// echo "Rincian dari fungsi penambahan(1,2) : ";
// echo "<br />";
// penambahan(1,2);
 
// echo "Rincian dari fungsi penambahan(5,4,3,2,1) : ";
// echo "<br />";
// penambahan(5,4,3,2,1);
 
// echo "Rincian dari fungsi penambahan(0,6,8,19) : ";
// echo "<br />";
// echo penambahan(0,6,8,19);





// // penggunaan strtolower()
// $kalimat = "SAYA Sedang Belajar PHP di DUNIAILKOM";
// $kalimat_new = strtolower($kalimat);
// echo $kalimat_new;


// // contoh
// $dari_user = "Andi";
// $dari_database = "andi";
  
// if ($dari_user == $dari_database) {
//   echo "Sama";
// }
// else {
//   echo "Tidak Sama";
// }
  



// // penggunaan strtoupper()
// $kalimat = "SAYA Sedang Belajar PHP di DUNIAILKOM";
// $kalimat_new = strtoupper($kalimat);
// echo $kalimat_new;



// // penggunaan ucfirst()
// $kalimat = "saya sedang belajar PHP di Duniailkom";
// $kalimat_new = ucfirst($kalimat);
// echo $kalimat_new;



// // penggunaan ucwords()
// $kalimat = "saya sedang belajar php di duniailkom";
// $kalimat_new = ucwords($kalimat);
// echo $kalimat_new;


// $kalimat = "SAYA Sedang Belajar PHP di DUNIAILKOM";
// $kalimat_new = ucwords($kalimat);
// echo $kalimat_new;



// $kalimat = "SAYA Sedang Belajar PHP di DUNIAILKOM";
// $kalimat_kecil = strtolower($kalimat);
// $kalimat_new = ucwords($kalimat_kecil);
// echo $kalimat_new;



// // penggunaan substr()
// $kalimat = "Belajar PHP di Duniailkom";
// $sub_kalimat = substr($kalimat,3);
// echo $sub_kalimat;



// $kalimat = "Belajar PHP di Duniailkom";
// echo substr($kalimat,8);
// echo "<br>";
// echo substr($kalimat,8,6);
// echo "<br>";
// echo substr($kalimat,8,-5);
// echo "<br>";
// echo substr($kalimat,-10);
// echo "<br>";
// echo substr($kalimat,-10,5);
// echo "<br>";
// echo substr($kalimat,-10,-3);





// // fungsi trim
// $nama = "andi ";
// $nama_juga = "andi";
// if (trim($nama) == trim($nama_juga)) {
//   echo "Nama Sama";
// }
// else {
//   echo "Nama Beda";   

// }




// $nama = "__andi__";
// $trim_nama = trim($nama);
// echo $trim_nama;
// echo "<br>";
  
// $trim_nama = trim($nama,"_");
// echo $trim_nama;




// // menghapus karakter angka
// $kata = "1 kelereng";
// $trim_kata = trim($kata,"0..9");
// echo $trim_kata;
// echo "<br>";
  
// $kata = "2 buah";
// $trim_kata = trim($kata,"0..9");
// echo $trim_kata;
// echo "<br>";
  
// $kata = "3 orang";
// $trim_kata = trim($kata,"0..9");
// echo $trim_kata;





// // fungsi rtrim() & ltrim()
// $nama = " andi ";
  
// $rtrim_nama = rtrim($nama);
// echo $rtrim_nama;
// echo "<br>";
  
// $ltrim_nama = ltrim($nama);
// echo $ltrim_nama;
// echo "<br>";
  
// $nama = "___andi___";
  
// $rtrim_nama = rtrim($nama,"_");
// echo $rtrim_nama;
// echo "<br>";
  
// $ltrim_nama = ltrim($nama,"_");
// echo $ltrim_nama;





// // fungsi explode
// $kalimat = "satu, dua, tiga, empat, lima";
// $arr_kalimat = explode (", ",$kalimat);
// var_dump ($arr_kalimat);



// $kalimat = "satu, dua, tiga, empat, lima";
// $arr_kalimat = explode (", ",$kalimat, 3);
// var_dump ($arr_kalimat);



// $kalimat = "satu, dua, tiga, empat, lima";
// $arr_kalimat = explode (", ",$kalimat, -3);
// var_dump ($arr_kalimat);




// // fungsi number_format()
// $angka = 1999.12345;
// $angka_format = number_format($angka);
// echo $angka_format;


// $angka = 1999.99;
// $angka_format = number_format($angka);
// echo $angka_format;


// $angka = 1999.888;
// $angka_format = number_format($angka,2);
// echo $angka_format;



// $angka = 1999;
// $angka_format = number_format($angka,3);
// echo $angka_format;


// string number_format ( float $number , int $decimals = 0 , 
// string $dec_point = "." , string $thousands_sep = "," )

// $angka = 1999.12345;
// $angka_format = number_format($angka,2, ",",".");
// echo $angka_format;




// // fungsi strpos()
// $kalimat="Sedang serius belajar PHP di duniailkom";
// $posisi=strpos($kalimat,"e");
// echo $posisi;


// $kalimat="Sedang serius belajar PHP di duniailkom";
// $cari="belajar";
// $posisi=strpos($kalimat, $cari);
// echo $posisi;


// $kalimat="Sedang serius belajar PHP di duniailkom";
// $posisi=strpos($kalimat,"CSS",9);
// var_dump($posisi);



// $kalimat="Sedang serius belajar PHP di duniailkom";
// $posisi=strpos($kalimat,"e", 5);
// echo $posisi;



// // stripos()
// $kalimat="Sedang serius belajar PHP di duniailkom";
// $posisi= stripos($kalimat,"php",9);
// echo $posisi;


// fungsi implode
$arr_kata = ["satu", "dua", "tiga", "empat", "lima"];
$kalimat = implode(" ",$arr_kata);
echo $kalimat;