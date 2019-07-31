<?php
	$dsn = 'mysql:dbname=demo_harviacode;host=localhost';
	$user = 'root';
	$password = '';

	try {
    	$dbh = new PDO($dsn, $user, $password);
    	// tangkap eksepsi kesalahan
    	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);
    	//echo 'Alhamdulillah emak naik haji dan koneksi sukses';
	} catch (PDOException $e) {
    	echo 'Gagal koneksi dengan sebab: ' . $e->getMessage();
	}
?>