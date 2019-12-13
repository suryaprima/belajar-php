<?php
    $host = "localhost"; // alamat host database, localhost sama dengan 127.0.0.1
    $username = "root"; // username database
    $password = ""; // password database
    $db = "profile"; //memilih database yang digunakan

    $koneksi = new mysqli($host, $username, $password, $db); // untuk melakukan koneksi ke database server

    if($koneksi->connect_error){
        die("Gagal menghubungkan ke database");
    }
?>