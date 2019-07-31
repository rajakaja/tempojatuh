<?php

    ini_set('display_errors', 0);
    session_start();
    
    $p=$_GET['p'];

    include_once 'class/pangkat.php';
    include_once 'config/koneksi.php';
    
    //Elemen halaman website==================
    include_once 'view/header.php';
    include_once 'view/menu_top.php';
    include_once 'view/menu_left.php';
    include_once 'view/main.php';
    include_once 'view/footer.php';