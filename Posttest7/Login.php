<?php 
session_start();
if(isset($_POST["Regissubmit"])){
    $_SESSION["Regissubmit"] = $_POST["Regissubmit"];
    $_SESSION["RegisEmail"] = $_POST["RegisEmail"];
    $_SESSION["RegisDomisili"] = $_POST["RegisDomisili"];
    $_SESSION["Regisusername"] = $_POST["Regisusername"];
    $_SESSION["Regispassword"] = $_POST["Regispassword"];
    $_SESSION["Konfirpassword"] = $_POST["Konfirpassword"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 6</title> 
</head>
<body>
<div class="header"> 
        <img src="images/logo.png" alt="" height="90%">
        <div class="header-logo">HALO SELAMAT DATANG DI PELAYANAN HOME CLEANING ANDA</div>
        <div class="header-list">

            <ul>
                <li> <a href="About.php"
                    style="text-decoration:none;"> About Me</a></li>
                <li><a href="http://localhost/Posttest7/Posttest7.php"
                    style="text-decoration:none ;">Home</a></li> 
                <li class="Mode"> DarkMode</li>
            </ul>
        </div>
    </div>
    <Center>
    <div>
    <img src="https://tukangbersih.com/main/img/our-service.svg" alt="" height="500px"><br>
    <form action="About.php" method="post">
        <label for="username">USER ID</label> <br>
        <input type="text"name = "username"id="username"> <br><br>
        <label for="password">PASSWORD</label><br><br>
        <input type="password" name = "password" id="password"> <br><br>
        <input class= "button" type="submit" name = "submit" value = "Submit"> <br><br>

        <p>Create Akun Baru <a href="registrasi.php" style="text-decoration:none ;">Klik Disini</a></p>
    </form>
    </div><br>     
    </Center>

    <div class="footer">
        <img src="images/alat.png" alt="" width="200px">
        <div class="footer-logo"> @Copyright 2022 - by Putri Wahdaniyah Iskandar <br><br>
            <button id="ganti-copyreg">Ganti Isi Copyright</button>
        </div>
<?php
// KODINGAN PHP
if(isset($_GET['submit']) && isset ($_SESSION['Regissubmit'])){
    if($_GET['username'] && isset ($_SESSION['Regisusername'])){
    if($_GET['password'] && isset ($_SESSION['Regispassword'])){
        echo "<h1>Login Berhasil</h1>";
    }
  }
}
?>
<link rel="stylesheet" href="REG.css">
<!-- <script src="java.js"></script>  -->
<script src="jquery.js"></script>   
</body>
</html>