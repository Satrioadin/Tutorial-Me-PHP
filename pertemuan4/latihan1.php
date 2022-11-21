<?php
$angka = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// echo $angka[1][1];

?>
<!-- pemanggilan pengulangan array yang di dalamnya ada beberapa array  -->
<?php foreach($angka as $a) : ?>
    <?php foreach($a as $b) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
<?php endforeach;?>

<style>
    .kotak {
        width: 200px;
        height: 200px;
        background-color: lightblue;
        float: left;
        margin: 5px 20px;
        text-align: center;
        line-height: 100px;
    }

    .kotak:hover {
        transform: rotate(45deg);
    }
</style>