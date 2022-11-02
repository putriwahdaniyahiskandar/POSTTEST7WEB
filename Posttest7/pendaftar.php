<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 5</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
<div class="header"> 
        <img src="images/logo.png" alt="" height="90%">
        <div class="header-logo">Pendaftaran Penyewaan Jasa Home Cleaning </div>
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
    <div class="form-class"> <br><br>
    
        <form action="tambah.php" method="post" enctype="multipart/form-data">
            
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text"><br>
           
            <label for="">Nomor HP</label><br>
            <input type="text" name="telpon" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="64" rows="10"></textarea><br>

            <label for="">Email</label><br>
            <input type="email" name="email" class="form-text"><br>

            <label for="nama_gambar">Nama file</label><br>
            <input type="text" name="nama_gambar" class="form-text">
            
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-text"><br>
           
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