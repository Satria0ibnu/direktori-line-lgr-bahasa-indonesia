<?php 
require 'functions.php';

    if (isset($_POST["submit"])) {
       
        //cek apakah data berhasil ditambahkan
        if (tambahPendant($_POST) > 0) {
            echo" 
                <script>
                    alert('berhasil');
                    document.location.href = '../pendant.php';
                </script>
            ";
        } else {
            echo "<script>
                    alert('gagal');
                    document.location.href = '../pendant.php';
                </script>
            "; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-directory.css">
    <title>Lychee | Home </title>
</head>
<body>
    <header>
        <a class="logo" href="../Index.php"><img  src="https://cdn-icons-png.flaticon.com/512/2358/2358239.png" alt="Logo Lychee Temporary" height="50px" width="50px"></a>
        <nav>
            <ul>
                <li><a href="../character.php">Character</a></li>
                <li><a href="../pendant.php">Pendant</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </header>
<body>
    <main>
    <h1> Add Pendant </h1>
    <div class="skill-list"></div>
    <form action="" method="POST" enctype="multipart/form-data">
    <ul>
        <li><label for="cardname">Name</label>
            <input type="text" name="pendname" id="cardname" required></li>
        
        <li><label for="nickname">Nick</label>
            <input type="text" name="nickname" id="nickname" required></li>
        
        <li><label for="gambar">Image</label>
            <input type="file" name="gambar" id="gambar" required></li>

        <button type="submit" name="submit">Tambahkan</button>    
    </ul>

    </form>
    </main>

</body>
</html>