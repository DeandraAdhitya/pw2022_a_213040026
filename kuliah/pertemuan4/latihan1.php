<?php  
// FUNCTION

// Built-in Function
// date();
echo date("l, j F Y");
echo "<hr>";

// time()
echo time();
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j F Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime(0,0,0,0,0,0);
// mendapatkan detik pada tanggal tertentu
// jam,menit,detik,bulan,tanggal,tahun
echo mktime(0,0,0,3,5,2002);
echo "<hr>";
echo date("l", mktime(0,0,0,8,12,2002));
echo "<hr>";

// MATH
echo pow(2,3); // pangkat
echo "<br>";
// pembulatan
// round(), ceil(), floor();
echo round(2.9); // terdekat
echo "<br>";
echo ceil(2.1); // ke atas (ceiling / langit2)
echo "<br>";
echo floor(2.9); // ke bawah (lantai)
echo "<hr>";


?>