<?php 
// pengecekan apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || !isset($_GET["kdBarang"]) || !isset($_GET["gendre"]) || !isset($_GET["jenis"]) || !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
</head>
<body>
    
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>" alt="">
        </li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["kdBarang"] ?></li>
        <li><?= $_GET["gendre"] ?></li>
        <li><?= $_GET["jenis"] ?></li>
    </ul>

    <a href="latihan1.php">Kembali</a>

</body>
</html>