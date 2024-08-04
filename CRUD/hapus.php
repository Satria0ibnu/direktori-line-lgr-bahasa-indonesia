<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapusCard($id) > 0) {
   //cek apakah data berhasil dihapuskan
    echo" 
        <script>
            alert('gagal');
            document.location.href = '../character.php';
        </script>
    ";
} else {
    echo "<script>
            alert('berhasil');
            document.location.href = '../character.php';
        </script>
    "; 
}

?>