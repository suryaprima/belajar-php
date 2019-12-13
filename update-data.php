<?php 
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $id_user = $_POST["id_user"];
        $name = $_POST["name"];
        $role = $_POST["role"];
        $availability = $_POST["availability"];
        $age = $_POST["age"];
        $location = $_POST["location"];
        $experience = $_POST["years_experience"];
        $email = $_POST["email"];

        $sql = "UPDATE user SET nama = '$name', role = '$role', availability = '$availability', age = '$age', location = '$location', years_experience = '$experience', email = '$email' WHERE id = '$id_user'";        
    }
?>