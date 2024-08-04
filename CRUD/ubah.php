<?php 
require 'functions.php';

$id = $_GET["id"];


$char = query("SELECT * FROM cards WHERE card_id = $id")[0];
    if (isset($_POST["submit"])) {
       
        //cek apakah data berhasil ditambahkan
        if (ubahCard($_POST) > 0) {
            echo" 
                <script>
                    alert('berhasil');
                    document.location.href = '../character.php';
                </script>
            ";
        } else {
            echo "<script>
                    alert('gagal');
                    document.location.href = '../character.php';
                </script>
            "; 
        }
    }
?>

<body>
    <h1> Ubah Data </h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $char['card_id'];?>">
        <input type="hidden" name="gambarlama" value="<?= $char['card_image'];?>">
    <ul>
    <li><label for="cardname">Name</label>
            <input type="text" name="cardname" id="cardname" required
            value="<?= $char['card_name'];?>">
        </li>
        
        <li><label for="nickname">Nick</label>
            <input type="text" name="nickname" id="nickname" required
            value="<?= $char['nick_name'];?>">
        </li>
        
        <li>
            <label for="gambar">Gambar</label> <br>
            <img src="img/<?=$char['card_image']?>" alt="" width="40"><br>
            <input type="file" name="gambar" id="gambar" >
        </li>

        <button type="submit" name="submit">Ubah</button>    
    </ul>

    </form>

</body>