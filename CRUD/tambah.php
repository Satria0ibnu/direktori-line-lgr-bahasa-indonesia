<?php 
require 'functions.php';

    if (isset($_POST["submit"])) {
       
        //cek apakah data berhasil ditambahkan
        if (tambahCard($_POST) > 0) {
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
    <h1> Tambah Card </h1>

    <form action="" method="POST" enctype="multipart/form-data">
    <ul>
        <li><label for="cardname">Name</label>
            <input type="text" name="cardname" id="cardname" required></li>
        
        <li><label for="nickname">Nick</label>
            <input type="text" name="nickname" id="nickname" required></li>
        
        <li><label for="gambar">Image</label>
            <input type="file" name="gambar" id="gambar" required></li>

        <button type="submit" name="submit">Tambahkan</button>    
    </ul>

    </form>

</body>