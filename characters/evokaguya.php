<?php 
require '../CRUD/functions.php';

$pack = query("SELECT * FROM cards WHERE nick_name = 'evokaguya' ")[0];

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
                    <li>1 : Saat aku tiba atau bangun landmarkku, 55% [Efek Blok] [Butterfly Garden] aktif. Saat
turn berakhir, buat [Butterfly] &lt;Activation Exception&gt; / Saat buat 3 bangunan, 45% pindah ke
tempat semula (+10% saat tidak aktif) / Saat buat bangunan, 50% langsung pindah ke dalam
line</li>
                    <li>2: Saat bangun/upgrade/tiba di landmarkku, 85% pasang Black Hole / Saat tiba di area
lawan, 80% bebas sewa lalu pindah ke area mana pun (batas 2x)</li>
                </ul>
                
                
            </div>
            <div>
                
            </div>
        </div>
    </main>
</body>

</html>