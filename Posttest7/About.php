<?php 
session_start();
if(isset($_POST["login"])){
    $_SESSION["Regissubmit"] = $_POST["Regissubmit"];
    $_SESSION["RegisEmail"] = $_POST["RegisEmail"];
    $_SESSION["RegisDomisili"] = $_POST["RegisDomisili"];
    $_SESSION["Regisusername"] = $_POST["Regisusername"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="header"> 
        <img src="images/logo.png" alt="" height="90%">
        <div class="header-logo">HOME CLEANING </div>
        <div class="header-list">
            <ul>
                <li> <a href="About.php"
                    style="text-decoration:none;"> About Me</a></li>
                <li><a href="http://localhost/Posttest7/Posttest7.php"
                    style="text-decoration:none ;">Home</a></li> 
                
            </ul>
        </div>
    </div>
    <img class="imgs" src="https://scontent.fcgk30-1.fna.fbcdn.net/v/t1.18169-9/13880250_324650404545815_5377093000130492614_n.png?stp=dst-png_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=85a577&_nc_ohc=6Z_8fmyEGNUAX_r-frA&_nc_ht=scontent.fcgk30-1.fna&oh=00_AT_rGXh3PwpiGcAovwiiH8l-03qotQbnGmkIHe0UylTgzQ&oe=6360D245" alt="" srcset="">
        <div class="footer-list">
        <table>
            
           <tbody>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $_SESSION["RegisEmail"]; ?></td>
            </tr>
            <tr>
                <td>Domisli</td>
                <td>:</td>
                <td><?php echo $_SESSION["RegisDomisili"]; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><?php echo $_SESSION["Regisusername"]; ?></td>
            </tr>
           </tbody>
    </table><br><br>
    
    <p>Isi Pendaftaran Penyewaan Jasa Home Cleaning <a href="index.php" style="text-decoration:none ;">Klik Disini</a></p>
    </div>
</body>
</html>