<?php 
// $students = [
//     ["Satrio", "211121004", "Pamulang", "ssatrio994@gmail.com", "Sistem Informasi"],
//     ["Adi", "211121004", "Pamulang", "ssatrio994@gmail.com", "Sistem Informasi"]
// ];

// Array Associative
// definisi sama seperti array numerik, kecuali
// key-nya bukan index tapi yang kita buat sendiri
$figures = [
    [
    "nama" => "Captain Amerika",
    "kdBarang" => "004223",
    "gendre" => "Marvel",
    "jenis" => "Poster",
    "gambar" => "captainAmerika.jpg"
    ],
    [
    "nama" => "Dead Pool",
    "kdBarang" => "004224",
    "gendre" => "Marvel",
    "jenis" => "Action Figure",
    // Array di dalam Array dan di dalamnya Array lagi
    // "tugas" => [90, 85, 100]
    "gambar" => "deadpool.png"
    ],
    [
        "nama" => "Groot",
        "kdBarang" => "004225",
        "gendre" => "Marvel",
        "jenis" => "Action Figure",
        "gambar" => "groot.jpg"
    ],
    [
        "nama" => "Iron Man",
        "kdBarang" => "004226",
        "gendre" => "Marvel",
        "jenis" => "Poster",
        "gambar" => "ironman.jpg"
    ],
    [
        "nama" => "Manrup",
        "kdBarang" => "004227",
        "gendre" => "Marvel",
        "jenis" => "Action Figure",
        "gambar" => "manrup.jpg"
    ],
    [
        "nama" => "Spider Man",
        "kdBarang" => "004228",
        "gendre" => "Marvel",
        "jenis" => "Poster",
        "gambar" => "spiderman.jpg"
    ],
    [
        "nama" => "Thanos",
        "kdBarang" => "004229",
        "gendre" => "Marvel",
        "jenis" => "Action Figure",
        "gambar" => "thanos.jpg"
    ],
    [
        "nama" => "Thor",
        "kdBarang" => "004230",
        "gendre" => "Marvel",
        "jenis" => "Poster",
        "gambar" => "thor.png"
    ],
    [
        "nama" => "Viona",
        "kdBarang" => "004231",
        "gendre" => "Disney",
        "jenis" => "Poster",
        "gambar" => "viona.jpg"
    ]
];

// memadukan atau mencampur Array Numerik dan Array Associative
// echo $students[1]["email"];
// echo $students[1]["tugas"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach($figures as $figure) : ?>
    <ul>
        <li>
            <img src="img/<?= $figure["gambar"] ?>" alt="">
        </li>
        <li>Nama: <?= $figure["nama"]; ?></li>
        <li>Kode Barang: <?= $figure["kdBarang"]; ?></li>
        <li>Gendre: <?= $figure["gendre"]; ?></li>
        <li>Jenis: <?= $figure["jenis"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>