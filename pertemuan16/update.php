<?php
require "functions.php";

session_start();

// jika user tidak login dan memaksa pindah ke halaman lain
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// mengembalikan array numerik sehingga kita harus menuliskan indexnya dulu atau bisa dengan mudah menambahkan indexnya di variable mhs (Query)
// var_dump($mhs[0]["nama"]);

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di update atau tidak
    if (update($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diupdate');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('data gagal diupdate');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>

<body>

    <h1>Update Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">GAMBAR : </label><br>
                <img src="img/<?= $mhs['gambar'] ?>" alt=""><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>
    </form>

</body>

</html>