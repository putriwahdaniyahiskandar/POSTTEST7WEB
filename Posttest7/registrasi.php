<?php
require "config.php";
if(isset($_POST['Regissubmit'])){
    $nama = $_POST['Regisnama'];
    $username = $_POST['Regisusername'];
    $password = $_POST['Regispassword'];
    $konfirmasi = $_POST['Konfirpassword'];
    $query = mysqli_query($db, "SELECT * FROM akun WHERE username = '$username'");
    if(mysqli_fetch_assoc($query)){
        echo "
        <script>
            alert('Username sudah digunakan');
        </script>
        ";
    } else {
        if($password == $konfirmasi){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = mysqli_query($db, "INSERT INTO akun VALUES ('','$nama', '$username', '$password')");
            if($query){
                echo "
                <script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'Login.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Registrasi Failed');
                </script>
                ";
            }
        } else {
            echo "
            <script>
                alert('Password dan konfirmasi password anda berbeda');
            </script>
            ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="REG.css"> 
</head>
<body>
<div class="header"> 
        <img src="images/logo.png" alt="" height="90%">
        <div class="header-logo">HOME CLEANING </div>
        <div class="header-list">

            <ul>
                <li> <a href="About.php"
                    style="text-decoration:none;"> About Me</a></li>
                <li><a href="http://localhost/POSTTEST7WEB/Posttest7/Posttest7.php"
                    style="text-decoration:none ;">Home</a></li> 
                <li class="Mode">DarkMode</li>
            </ul>
        </div>
    </div> <br><br>
    <div class = "Regis">
    <center>
    <form action="" method="post">
        <label for="Regisnama">Nama</label> <br>
        <input type="text"name = "Regisnama" id="nama" class = "Regis-css"> <br><br>
        <label for="Regisusername">Username</label> <br>
        <input type="text"name = "Regisusername" id="username" class = "Regis-css"> <br><br>
        <label for="Regispassword">Password</label> <br>
        <input type="password" name = "Regispassword" id="password" class = "Regis-css"> <br><br>
        <label for="Regispassword"> Konfimasi Password</label> <br><br>
        <input type="password" name = "Konfirpassword" id="Konfirpassword" class = "Regis-css"> <br><br>
        <input type="submit" name ="Regissubmit" value = "Submit" ><br><br><br>
        <img src="images/hai.png" alt="" height="100%">

    </form> 
    </center>
    </div>

    <div class="footer">
        <img src="images/alat.png" alt="" width="200px">
        <div class="footer-logo"> @Copyright 2022 - by Putri Wahdaniyah Iskandar <br><br>
            <button id="ganti-copyreg">Ganti Isi Copyright</button>
    </div>
    <script src="jquery.js"></script>
    <!-- <link rel="stylesheet" href="REG.css"> -->
</body>
</html>