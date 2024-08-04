<?php
$conn = mysqli_connect("localhost", "root" , "", "getchie");



function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambahCard($data) {
    global $conn;
     //ambil data tiap elemen
     $nama = htmlspecialchars($data["cardname"]);
     $nickname = htmlspecialchars($data["nickname"]);

     // upload gambar
     $gambar = upload();
    if (!$gambar) {
         return false;
    }

     $query = "INSERT INTO cards VALUES
                ('', '$gambar', '$nama', '$nickname')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahPendant($data) {
    global $conn;
     //ambil data tiap elemen
     $nama = htmlspecialchars($data["pendname"]);
     $nickname = htmlspecialchars($data["nickname"]);

     // upload gambar
     $gambar = upload();
    if (!$gambar) {
         return false;
    }

     $query = "INSERT INTO pendants VALUES
                ('', '$gambar', '$nama', '$nickname')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload () {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    

    // cek apakah tidak ada gambar yg diupload
    if($error === 4) {
        echo "<script> alert('pilih gambar terlebih dahulu!'); </script>";
        return false;
    }

    // cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

        // explode adalah fungsi yang memecah sebuah string menjadi array
        // explode(delimiter, string)
    $ekstensiGambar = explode('.', $namaFile);
   
        // end adalah fungsi yang mengembalikan nilai terakhir array
    $ekstensiGambar = strtolower(end($ekstensiGambar));

        // in_array adalah untuk cek adakah sebuah string didalam array 
        // in_array(needle, haystack);
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
 
        echo "<script> alert('yang anda pilih bukan gambar!'); </script>";
        return false;
    }

    // cek jika ukuran terlalu besar
    if ($ukuranFile > 10000000) {
        echo "<script> alert('ukuran gambar terlalu besar!'); </script>";
        return false;
    }

    //lolos pengecekan, gambar diupload ke folder img . relatif ke file ini
        //generate nama baru untuk file. uniqid untuk menghasilkan id random
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../img/'. $namaFileBaru);

    return $namaFileBaru;

}

function hapusCard($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM cards WHERE card_id = $id");
}

function hapusPendant($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM Pendants WHERE pendant_id = $id");
}

function ubahCard($data) {
    global $conn;
     //ambil data tiap elemen
     $id = $data["id"];
     $nama = htmlspecialchars($data["cardname"]);
     $nickname = htmlspecialchars($data["nickname"]);
     $gambarLama = $data["gambarlama"];

     //cek apakah user pilih gambar baru atau tidak 
     if ($_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
     } else {
        $gambar = upload();
     }

     if (empty($gambar)) {
        $gambar = $gambarLama;
    }

     $query = "UPDATE cards SET
                card_name = '$nama',
                nick_name = '$nickname',
                card_image = '$gambar'
                WHERE card_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahPendant($data) {
    global $conn;
     //ambil data tiap elemen
     $id = $data["id"];
     $nama = htmlspecialchars($data["pendname"]);
     $nickname = htmlspecialchars($data["nickname"]);
     $gambarLama = $data["gambarlama"];

     //cek apakah user pilih gambar baru atau tidak 
     if ($_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
     } else {
        $gambar = upload();
     }

     if (empty($gambar)) {
        $gambar = $gambarLama;
    }

     $query = "UPDATE pendants SET
                pendant_name = '$nama',
                nick_name = '$nickname',
                pendant_image = '$gambar'
                WHERE pendant_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
    

function cariCard($keyword) {
    $query = "SELECT * FROM cards
                WHERE
                card_name LIKE '%$keyword%'
                ";
    return query($query);
}

function cariPendant($keyword) {
    $query = "SELECT * FROM pendants
                WHERE
                pendant_name LIKE '%$keyword%'
                ";
    return query($query);
}
?>