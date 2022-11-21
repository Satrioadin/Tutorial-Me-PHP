<?php

$mahasiswa = [
    ["Satrio", "211121004", "Pamulang", "ssatrio994@gmail.com"],
    ["adi", "211121004", "Pamulang", "ssatrio994@gmail.com"],
    ["Nugroho", "211121004", "Pamulang", "ssatrio994@gmail.com"]
];

// var_dump($mahasiswa);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <br>
    array numerik adalah array yang indexnya ankga yang di mulai dari 0 seperti contoh di bawah

    <?php foreach( $mahasiswa as $m) : ?>
        <ul>
            <li>Nama : <?= $m[0]?></li>
            <li>Nim : <?= $m[1]?></li>
            <li>Lokasi : <?= $m[2]?></li>
            <li>Email : <?= $m[3]?></li>
        </ul>
    <?php endforeach?>

</body>
</html>