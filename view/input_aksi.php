<?php 
require '../config.php';
$nama = $_POST['nama'];
$tgl_tempo = $_POST['tempo'];
$nip = $_POST['nip'];
$sql = "INSERT INTO pangkat (nama, nip, jatuh_tempo)VALUES ('$nama', '$nip', '$tgl_tempo')";
    if (mysqli_query($dbconnect, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbconnect);
    }

    mysqli_close($dbconnect);
    header('Location: ' . $_SERVER['HTTP_REFERER'].'');

?>