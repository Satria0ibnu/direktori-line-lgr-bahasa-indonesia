<?php 
require 'CRUD/functions.php';

// pagination 
// LIMIT datadimulaidariindexberapa, berapabanyakdata

// konfigurasi 
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM cards"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page" ])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


//$cards = query("SELECT * FROM cards LIMIT $awalData, $jumlahDataPerHalaman");


// tombol cari ditekan
if (isset($_POST["cari"]) && !empty($_POST["keyword"])) {
    $cards = cariCard($_POST["keyword"]);
} else {
    $cards = query("SELECT * FROM cards LIMIT $awalData, $jumlahDataPerHalaman");
}

// i think we should move line 15 to else part for if at line 18
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-directory.css">
    <title>Lychee | Card Characters </title>
</head>
<body>
    <header>
        <a class="logo" href="Index.php"><img  src="https://cdn-icons-png.flaticon.com/512/2358/2358239.png" alt="Logo Lychee Temporary" height="50px" width="50px"></a>
        <nav>
            <ul>
                <li><a href="character.php">Character</a></li>
                <li><a href="pendant.php">Pendant</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1> Card Directory</h1>
        <a href="CRUD/tambah.php">Tambah data</a>
        <br>
        <br>

        <form action="" method="post">
            <input style="
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
            width: 300px;" 
            type="text" name="keyword" id="" autofocus 
            placeholder="masukkan keyword" autocomplete="off">

            <button class="search-button" type="submit" name="cari">go</button>

        </form>
        <br>
        <!-- navigasi -->
        <?php if($halamanAktif > 1) : ?>
        <a href="?page=<?=$halamanAktif-1?>">&laquo;</a>
        <?php endif;?>
        
        <?php for ($i=1; $i <= $jumlahHalaman ; $i++) :?>
            <?php if($i == $halamanAktif) : ?>
            <a href="?page=<?=$i?>" style="font-weight:bold;"><?=$i?></a>

            <?php else : ?>
            <a href="?page=<?=$i?>"><?=$i?></a>


            <?php endif; ?>
        <?php endfor; ?>

        <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?=$halamanAktif+1?>">&raquo;</a>
        <?php endif;?>

        <br>
        
            <table cellpadding="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Action</th>
                    <th>Image</th>
                    <th>Name</th>
                </tr>
                <?php $i = 1 + $awalData;  ?>
                <?php foreach( $cards as $c) : ?>

                <tr>
                    <td><?= $i; ?></td>

                    <!-- "hapus.php?id=  //$m["id"]"
                        menuju ke hapus.php sekaligus mengirim id lewat
                    metode get atau url -->
                    <td> <a href="CRUD/ubah.php?id=<?= $c["card_id"]?>">ubah</a> |
                        <a href="CRUD/hapus.php?id=<?= $c["card_id"]?>" onclick="return confirm('yakin?');">hapus</a></td>

                    <td><a href="characters/<?= $c["nick_name"]?>.php"><img src="img/<?= $c["card_image"]?>" alt="gambar <?= $c["card_name"]?>" height="200px"></a></td>
                    <td><a href="characters/<?= $c["nick_name"]?>.php"><?= $c["card_name"]?></a></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach;?>

            </table>
    </main>
</body>
</html>
