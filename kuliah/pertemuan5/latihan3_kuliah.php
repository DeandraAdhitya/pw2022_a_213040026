<?php 
// Studi Kasus

$mahasiswa = [
    ["Deandra Adhitya", "213040026",
    "deandraaditya@gmail.ac.id", "Teknik Informatika"],
    ["Fauzi Ilyas", "143567489",
    "fauziilyas@gmail.com", "Teknik Informatika"],
    ["Wildan hafidh", "567483975",
    "wildanhafidh@gmail.com", "Teknik Mesin"]
];

?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs[0] ?></li>
        <li>NPM: <?php echo $mhs[1] ?></li>
        <li>Email: <?php echo $mhs[2] ?></li>
        <li>Jurusan: <?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>