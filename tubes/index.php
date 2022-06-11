<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$tanaman = query("SELECT * FROM tanaman");

// query mahasiswa ketika tombol cari diklik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM tanaman
              WHERE
              nama_tanaman LIKE '%$keyword%' OR
              nama_latin Like '%$keyword%'
              ";
  $tanaman = query($query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Halaman Admin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Daftar Tanaman</h1>

<a href="tambah.php" class="btn badge bg-primary">Tambah Data Tanaman</a>

<div class="row mt-4">
        <div class="col-8">
          <form action="" method="get">
            <div class="input-group mb-3">
              <input type="text" class="form-control"
              name="keyword" id="keyword" autocomplete="off"
              placeholder="Masukkan keyword pencarian..." autofocus>
              <button class="btn btn-dark" type="submit"
              id="cari" name="cari">Cari</button>
            </div>
          </form>
        </div>
      </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama Tanaman</th>
      <th scope="col">Nama Latin</th>
      <th scope="col">Jenis</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach($tanaman as $row) { ?>
    <tr class="align-middle">
          
      <th scope="row"><?= $no++; ?></th>
      <td>
          <img src="img/<?php echo $row["gambar"] ?>" width="50" class="rounded-circle">
      </td>
      <td><?php echo $row["nama_tanaman"] ?></td>
      <td><?php echo $row["nama_latin"] ?></td>
      <td><?php echo $row["jenis"] ?></td>
      <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn badge bg-warning">edit</a>
          <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('Anda yakin?');">delete</a>
      </td>

    </tr>
    <?php } ?>
  </tbody>
</table>

<a href="logout.php" class="btn badge bg-danger">Logout</a> <br>

<br>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</body>
</html>