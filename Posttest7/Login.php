<?php
session_start();
require "config.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($db, "SELECT * FROM akun WHERE username = '$username'");
    $result = mysqli_fetch_assoc($query);
    $username = $result['username'];
    if(password_verify($password,$result['password'])){
        $_SESSION['Login'] = true;
        $_SESSION['nama'] = $result["nama"];
        $_SESSION['username'] = $result['username'];
        echo "
        <script>
            alert('Welcome To Home Cleaning $username');
            document.location.href = 'Posttest7.php';
        </script>";
        exit;
    } else {
        echo "
        <script>
            alert('Username dan Password Salah');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 7</title> 
</head>
<body>
<div class="header"> 
        <img src="images/logo.png" alt="" height="90%">
        <div class="header-logo">HALO SELAMAT DATANG DI PELAYANAN HOME CLEANING ANDA</div>
        <div class="header-list">

                <li class="Mode"> DarkMode</li>
        </div>
    </div>
    <Center>
    <div>
    <img src="https://tukangbersih.com/main/img/our-service.svg" alt="" height="500px"><br>
    <form action="" method="post">
        <label for="username">USER ID</label> <br>
        <input type="text"name = "username"id="username"> <br><br>
        <label for="password">PASSWORD</label><br><br>
        <input type="password" name = "password" id="password"> <br><br>
        <input class= "submit" type="submit" name = "submit" value = "Submit"> <br><br>

        <p>Create Akun Baru <a href="registrasi.php" style="text-decoration:none ;">Klik Disini</a></p>
    </form>
    </div><br>     
    </Center>

    <div class="footer">
        <img src="images/alat.png" alt="" width="200px">
        <div class="footer-logo"> @Copyright 2022 - by Putri Wahdaniyah Iskandar <br><br>
            <button id="ganti-copyreg">Ganti Isi Copyright</button>
        </div>
<link rel="stylesheet" href="REG.css">
<!-- <script src="java.js"></script>  -->
<script src="jquery.js"></script>   
</body>
</html>