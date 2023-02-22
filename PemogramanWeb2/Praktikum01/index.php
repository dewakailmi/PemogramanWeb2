<?php
/*
echo "Hello World <br>"; 
echo 'Hello World <br>';
print_r("Faris Al Hasani <br>");
var_dump("123");
*/

// Membuat Variabel User
$nama = "Adam Malik";
$umur = 18;
$berat = 70.5;
$mahasiswa = TRUE;

/*
echo "Halo, Nama saya $nama ";
echo "umur saya $umur Thn ";
echo "dan memiliki berat badan $berat Kg";
*/

// Membuat Variabel Sistem
/*
echo "Document Root" . $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo "Nama File" . $_SERVER['PHP_SELF'];
echo "<br>";
*/

// Membuat Variabel Konstanta
define('PHI', 3.14);
$jari = 8;
$kelilingLingkaran = 2 * PHI * $jari;
$luasLingkaran = PHI * $jari * $jari;

/*
echo "Luas lingkaran dengan jari-jari $jari cm = $luasLingkaran cm";
echo "<br>";
echo "Keliling lingkaran dengan jari-jari $jari cm = $kelilingLingkaran cm";
*/

//Membuat Array
$programs = ["PHP", "JavaScript", "HTML", "CSS"];
echo $programs[0];
echo "jumlah data sebanyak" . count($programs);

?>