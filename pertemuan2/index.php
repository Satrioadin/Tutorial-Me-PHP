<?php
// Pertemuan 2 -PHP Dasar
// sintaks PHP

// standar Output
// echo, print
// print_r
// var_dump

// echo "satrio adi";

// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP (tidak disarankan)

// variable dan tipe data
// variable
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "satrio";
// echo 'halo, nama saya $nama';

// Operator
// aritmatika
// + - / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string /concatenation / concat
// .
// $nama_depan = "Satrio";
// $nama_belakang = "adi";
// echo $nama_depan . " " . $nama_belakang;

// Oprator assignment
// =, +=, -+, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "satrio";
// $nama .= " ";
// $nama .= "adi";
// echo $nama;

// Oprator perbandingan (tidak mengecek tipe data)
// <, >, <=, >=, ==, !=
// var_dump(1 < 5);

// Oprator identitas (mengecek tipe data)
// ===, !==
// var_dump(1 === "1");

// Oprator logika
// &&, ||, !
// $x = 30;
// oprator && harus 2 2 nya bernilai true
// var_dump($x < 20 && $x % 2 == 0);
// oprator || 1 saja bernilai true maka dia true
// var_dump($x < 20 || $x % 2 == 0);


?>

<!-- 1 -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>

    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>

</body>

</html> -->