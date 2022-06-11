<?php 
require 'functions.php';
if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }

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

    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="style.css">
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">

<h1>Halaman Registrasi</h1>

<div class="rows mt-3">
    <div class="col-5">
<form action="" method="POST">
    
    <div class="mb-3">
        <label for="username" class="form-label">Username :</label>
        <input type="text" class="form-control" name="username" id="username">
    </div>

    <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="mb-3">
            <label for="password2" class="form-label">Konfirmasi Password :</label>
            <input type="password" class="form-control" name="password2" id="password2">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-dark" name="register">Register</button>
    </div>

        <p> Sudah punya akun? 
            <a href="login.php">Login di sini</a>
        </p>

</form>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>