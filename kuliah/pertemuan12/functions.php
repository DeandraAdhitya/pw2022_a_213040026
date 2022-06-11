<?php 
function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040026') or die('KONEKSI GAGAL!');
    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
}
    return $rows;
}


function tambah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data["id"]);
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                npm = '$npm',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
              WHERE ID = $id
             ";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO 
                mahasiswa
            VALUES
                (null, '$npm', '$nama', '$email', '$jurusan', '$gambar' )";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

?> 