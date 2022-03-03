<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}

$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}

$i = 0;
do {
    echo "Hello World! <br>";
$i++;
} while( $i < 5 );

// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

$x = 2;
if( $x < 20 ) {
    echo "benar";
} else if( $x == 20 ) {
    echo "bingo!";
} else {
    echo "salah";
}
?>