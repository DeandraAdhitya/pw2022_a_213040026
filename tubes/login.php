<?php
session_start(); 

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'functions.php';
if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"]) ) {
        // set session
        $_SESSION["login"] = true;
        header("Location: index.php");
        exit;
        }
    }

    $error = true;
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

    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>

<div class="container">

<h1>Halaman Login</h1>

<?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>

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
            <button type="submit" class="btn btn-dark" name="login">Login</button>
    </div>
            <p>Belum punya akun?
                <a href="registrasi.php">Register di sini</a>
            </p>

</form>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>