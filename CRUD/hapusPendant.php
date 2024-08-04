<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapusPendant($id) > 0) {
   //cek apakah data berhasil dihapuskan
    echo" 
        <script>
            alert('gagal');
            document.location.href = '../pendant.php';
        </script>
    ";
} else {
    echo "<script>
            alert('berhasil');
            document.location.href = '../pendant.php';
        </script>
    "; 
}

?>