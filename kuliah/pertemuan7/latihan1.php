<?php 
// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// $_GET
$mahasiswa = [
    ["nama" => "Deandra Adhitya", "npm" => "213040026",
    "email" => "deandraaditya@gmail.ac.id", "jurusan" => "Teknik Informatika",
"gambar" => "img/images.jpg"],
    ["nama" => "Fauzi Ilyas", "npm" => "143567489",
    "email" => "fauziilyas@gmail.com", "jurusan" => "Teknik Informatika",
"gambar" => "img/Jujutsu-Kaisen-4.jpg"],
    ["nama" => "Wildan hafidh", "npm" => "567483975",
    "email" => "wildanhafidh@gmail.com", "jurusan" => "Teknik Mesin",
"gambar" => "img/UItachi.png"],
    ["nama" => "Yusuf Nur Qolbi", "npm" => "213048575",
    "email" => "yusufnq@gmail.com", "jurusan" => "Teknik Industri",
"gambar" => "img/itachi.jpg"]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>