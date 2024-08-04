<?php 
require '../CRUD/functions.php';

$pack = query("SELECT * FROM cards WHERE nick_name = 'legwinter' ")[0];

$image = $pack['card_image'];
$name = $pack['card_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-card-directory.css">
    <title>Lychee | Card  <?= $name?></title>
</head>
<body>
    <header>
        <a class="logo" href="../Index.php"><img  src="https://cdn-icons-png.flaticon.com/512/2358/2358239.png" alt="Logo Lychee Temporary" height="50px" width="50px"></a>
        <nav>
            <ul>
                <li><a href="../character.php">Character</a></li>
                <li><a href="">Pendant</a></li>
                <li><a href="../about.html">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1><?= $name?></h1>
        <div class="content">
            <div class="content-item" id="image-card">
                <img src="../img/<?= $image?>" alt="<?= $name?>" width="300px">
                <p><b></b></p>
            
            </div>
            <div class="content-item" id="skill-list" >
                <ul>
                    <li>1 : Saat aku tiba atau bangun landmarkku, 50% pindah ke tempat semula (+15% saat
tidak aktif) / Saat tiba atau langsung bangun landmarkku, 90% adakan Olympic di area tim
dipilih dan Auto-construct landmark, lalu tarik lawan jarak 4 blok depan/belakang / Saat aku
berada di landmarkku selama turnku berakhir, 70% pasang [Ice Thorns] di landmark milikku</li>
                    <li>2: Saat game dimulai, 100% pilih dan raih Skill Winter's Super Defense (defense kurung
penjara / defense efek berbahaya / defense Completion) / Setiap chance daduku, 45%
Charge [Super Shield] (Maks. 2 level) &lt;Activation Exception&gt; / Saat lewati lawan setelah
lempar dadu, 75% ubah 1 lawan menjadi [Snowman]</li>
                </ul>
                
                
            </div>
            <div>
                
            </div>
        </div>
    </main>
</body>

</html>