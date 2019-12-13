<?php
include "koneksi.php";

$sql = "SELECT * FROM user";
$result = $koneksi->query($sql);

foreach($result as $hasil){
    $id = $hasil["id"];
    $name = $hasil["nama"];
    $role = $hasil["role"];
    $availability = $hasil["availability"];
    $age = $hasil["age"];
    $location = $hasil["location"];
    $experience = $hasil["years_experience"];
    $email = $hasil["email"];    
}
?>