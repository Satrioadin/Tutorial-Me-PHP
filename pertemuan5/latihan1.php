<?php 
// $_GET
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach($figures as $figure) : ?>
    <ul>
        <li>
            <a href="latihan2.php?nama=<?= $figure["nama"]; ?>&kdBarang=<?= $figure["kdBarang"]; ?>&gendre=<?= $figure["gendre"]; ?>&jenis=<?= $figure["jenis"]; ?>&gambar=<?= $figure["gambar"]; ?>">
            <?= $figure["nama"]; ?></a>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>