<?
require '../config.php';
$id = $_GET['id'];
$sql = "DELETE FROM barang WHERE id=$id";
if (mysqli_query($dbconnect, $sql)) {
    echo "Record delete successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconnect);
}

mysqli_close($dbconnect);
header('Location: ' . $_SERVER['HTTP_REFERER'].'');
?>
