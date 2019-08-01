<?php 
require '../config.php';
$nama = $_POST['nama'];
$tgl_tempo = $_POST['tempo'];
$kode = rand(pow(10, 5-1), pow(10, 5)-1);
$sql = "INSERT INTO barang (nama_barang, kode_barang, jatuh_tempo)VALUES ('$nama', 'KBT-$kode', '$tgl_tempo')";
    if (mysqli_query($dbconnect, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbconnect);
    }

    mysqli_close($dbconnect);
    header('Location: ' . $_SERVER['HTTP_REFERER'].'');

?>