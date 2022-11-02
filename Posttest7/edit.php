<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM pendaftar JOIN cleaning on pendaftar.id = cleaning.id WHERE pendaftar.id =$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $nama = $result['nama'];
    $telpon = $result['telpon'];
    $alamat = $result['alamat'];
    $email = $result['email'];
    $oldimages = $result['file'];
   

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $gambar_lama = $oldimages;


    $query = mysqli_query($db,"UPDATE pendaftar SET nama='$_POST[nama]',telpon='$_POST[telpon]',alamat='$_POST[alamat]',email='$_POST[email]' WHERE id=$_GET[id]");
    if($query){
        
        date_default_timezone_set("Asia/Makassar");
        $date = strtotime("now");
        $tanggal = date("Y-m-d H:i:s", $date);
        unlink('images/'.$gambar_lama);
        $gambar = $_FILES['gambar']['name'];
        $nama = $_POST['nama_gambar'];
        $img = explode('.', $gambar);
        $ekstensi = strtolower(end($img));
        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "images/$gambar_baru");
        $query_images = mysqli_query($db, "UPDATE cleaning SET nama_gambar = '$nama', file = '$gambar_baru', tanggal = '$tanggal' WHERE id = '$id'");
        
        if ($query_images) {
            echo"Update Gambar Berhasil";
            header("Location:index.php");
        } else{
            echo"Update Gagal";
        }
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
    <title>Posttest 6</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<div class="header"> 
        <img src="images/logo.png" alt="" height="90%">
        <div class="header-logo">EDIT DATA  </div>
        <div class="header-list">

            <ul> 
                <li class="Mode"> DarkMode</li>
                <li> <a href="About.php"
                    style="text-decoration:none;"> About Me</a></li>
                <li><a href="http://localhost/Posttest7/Posttest7.php"
                    style="text-decoration:none ;">Home</a></li> 
            </ul>
        </div>
    </div>

    <br><br>
    <div class="form-class">
        
        <form action="" method="post" enctype="multipart/form-data">

            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text" value='<?=$nama?>'><br>
            
            <label for="">Nomor HP</label><br>
            <input type="text" name="telpon" class="form-text" value='<?=$telpon?>'><br>

            <label for="">Alamat Lengkap</label><br>
            <textarea name="alamat" cols="64" rows="10" ><?=$alamat?></textarea><br>
            
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-text" value='<?=$email?>'><br>
          
            <label for="nama_gambar">Nama File</label><br>
            <input type="text" name="nama_gambar" class="pesan-item" value='<?=$oldimages?>'><br><br>
            
            <label for="gambar">Gambar</label><br>
            <input type="file" name="gambar" class="pesan-item" value='<?=$gambar?>'><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
            
            
        </form>
    </div>
    <div class="footer">
        <img src="images/alat.png" alt="" width="200px">
        <div class="footer-logo"> @Copyright 2022 - by Putri Wahdaniyah Iskandar <br><br>
            <button id="ganti-copyreg">Ganti Isi Copyright</button>
        </div>
        
    <script src="jquery.js"></script>  
</body>
</html>