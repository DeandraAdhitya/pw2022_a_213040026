<?php 
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilai nya

$mahasiswa = [
    ["nama" => "Deandra Adhitya", "npm" => "213040026",
    "email" => "deandraaditya@gmail.ac.id", "jurusan" => "Teknik Informatika"],
    ["nama" => "Fauzi Ilyas", "npm" => "143567489",
    "email" => "fauziilyas@gmail.com", "jurusan" => "Teknik Informatika"],
    ["nama" => "Wildan hafidh", "npm" => "567483975",
    "email" => "wildanhafidh@gmail.com", "jurusan" => "Teknik Mesin"],
    ["nama" => "Yusuf Nur Qolbi", "npm" => "213048575",
    "email" => "yusufnq@gmail.com", "jurusan" => "Teknik Industri"]
];

// var_dump($mahasiswa[2]["email"]);

?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"] ?></li>
        <li>NPM: <?php echo $mhs["npm"] ?></li>
        <li>Email: <?php echo $mhs["email"] ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"] ?></li>
    </ul>
<?php } ?>