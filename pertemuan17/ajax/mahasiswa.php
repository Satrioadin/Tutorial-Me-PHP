<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa 
                WHERE
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
        ";
$mahasiswa = query($query);
?>

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
    <?php foreach ($mahasiswa as $row) : ?>
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