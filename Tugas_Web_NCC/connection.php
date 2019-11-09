<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "TUGAS_WEB_NCC";
    $db = new mysqli($hostname, $username, $password, $dbname);
    
    $koneksi = mysqli_connect($hostname, $username, $password);

    if (!$koneksi) {
        printf("Gagal Koneksi : %s", mysqli_error($koneksi));
    }

    mysqli_select_db($koneksi, $dbname);
?>