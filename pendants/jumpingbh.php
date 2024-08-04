<?php 
require '../CRUD/functions.php';

$pack = query("SELECT * FROM pendants WHERE nick_name = 'jumpingbh' ")[0];

$image = $pack['pendant_image'];
$name = $pack['pendant_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-pendant-directory.css">
    <title>Lychee | Pendant  <?= $name?></title>
</head>
<body>
    <header>
        <a class="logo" href="../Index.php"><img  src="https://cdn-icons-png.flaticon.com/512/2358/2358239.png" alt="Logo Lychee Temporary" height="50px" width="50px"></a>
        <nav>
            <ul>
                <li><a href="../character.php">Character</a></li>
                <li><a href="..pendant.php">Pendant</a></li>
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
            <div class="content-item" id="skill-list" style="font-size: 50px;">
            <ul>
                <li>Skill: Saat tiba di landmarkku, 55% aktifkan [Efek Bleed] pada lawan yang ada di dalam line
selama 1 turn / Saat tiba atau bangun landmarkku, 90% tarik lawan jarak 4 blok
depan/belakang dan kurung penjara lawan</li>
            </ul>
            </div>
            <div>
                
            </div>
        </div>
    </main>
</body>

</html>