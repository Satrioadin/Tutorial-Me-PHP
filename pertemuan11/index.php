<?php 
require 'functions.php';
// ORDER BY untuk mengurutkan data mahasiswa
// ASC mengurutkan data dari yang kecil ke besar (data lama tampil di atas data baru di bawah)
// DESC mengurutkan data dari yang besar ke kecil (data baru tampil di atas data lama di bawah)
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");
$mahasiswa = query("SELECT * FROM mahasiswa ");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Dartar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <!-- autofocus merupakan atribut yang otomatis aktif ketika halaman di buka atau reload -->
        <!-- autocomplete menghilangkan histori yang pernah kita masukan di input -->
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="update.php?id=<?= $row["id"] ?>">Update</a> |
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
            </td>
            <td>
                <img src="img/<?= $row["gambar"]; ?>" alt="" width="50">
            </td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>

    

</body>
</html>