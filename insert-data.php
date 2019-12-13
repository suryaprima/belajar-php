<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE
    (
        '1',
        'Surya Prima Siregar',
        'Staf IT',
        'Full Time',
        '20',
        'Medan',
        '7',
        'suryaprimaregar@gmail.com'
    )";

    if($koneksi->query($sql) === TRUE){
        echo "Insert data berhasil ditambahkan";
    } else {
        echo "Insert data gagal ditambahkan";
    }
?>