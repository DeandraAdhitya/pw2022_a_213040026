<?php 
// Pertemuan 2
// Sintaks PHP

echo "Deandra Adhitya";

// Variable dan Tipe Data
// Variable
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Deandra Adhitya";
echo "<hr> Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
echo "<hr>";
echo 1 + 1;
$x = 10;
$y = 20;
echo $x * $y;

// penggabung string / concatenation / concat
// .
echo "<hr>";
$nama_depan = "Deandra";
$nama_belakang = "Adhitya";
echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo "<hr>";
echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=
echo "<hr>";
var_dump(1 < 5);

// identitas
// ===, !==
echo "<hr>";
var_dump(1 === 5);

// Logika
// &&, ||, !
echo "<hr>";
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>