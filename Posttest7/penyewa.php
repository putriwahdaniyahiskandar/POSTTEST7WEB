<?php
session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: Login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME CLEANING</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <div class="header">
        <img src="images/logo.png" alt="" height="90%">
        <div class="header-logo">HOME CLEANING </div>
        <div class="header-list">

            <ul>
                <li><a href="Logout.php" style="text-decoration: none;">Logout</a></li>
                <li class="Mode"> DarkMode</li>
                <li> <a href="About.php" style="text-decoration:none;"> About Me</a></li>
                <li><a href="http://localhost/POSTTEST7WEB/Posttest7/Posttest7.php" style="text-decoration:none ;">Home</a></li>
            </ul>
        </div>
    </div>
    <div class="list-table center" style="overflow-x: auto;">
        <br><br>

        <center>
            <div class="box">
                <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span><br><br>
                    <form action="" method="get">
                        <input type="search" name="search" id="search" placeholder="Search..." /><br>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th colspan="6" class="thead">
                            <h3 class="center">SEWA JASA HOME CLEANING</h3>
                        </th>
                        <th style="width: 20px;" colspan="3">
                            <a href="pendaftar.php" class="tambah">Tambah</a>
                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th nowrap>Nama Lengkap</th>
                        <th>No Telpon</th>
                        <th>Alamat Lengkap</th>
                        <th>Email</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "config.php";
                    $no = 1;
                    if (isset($_GET['submit'])) {
                        $search = $_GET['search'];
                        $query = mysqli_query($db, "SELECT * FROM pendaftar INNER JOIN cleaning ON pendaftar.id = cleaning.id_gambar WHERE nama LIKE '%$search%'");;
                    } else {
                        $query = mysqli_query($db, "SELECT * FROM pendaftar INNER JOIN cleaning ON pendaftar.id = cleaning.id_gambar");
                    }
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td nowrap><?= $row['nama'] ?></td>
                            <td><?= $row['telpon'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><img src="images/<?= $row['file'] ?>" alt="" style="max-width:100px"></td>
                            <td><?= $row['tanggal'] ?></td>

                            <td class="edit">
                                <a href="edit.php?id=<?= $row['id'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="hapus">
                                <a href="hapus.php?id=<?= $row['id'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
    </div>
    <br><br>
    <div class="footer">
        <img src="images/alat.png" alt="" width="200px">
        <div class="footer-logo"> @Copyright 2022 - by Putri Wahdaniyah Iskandar <br><br>
            <button id="ganti-copyreg">Ganti Isi Copyright</button>
        </div>

        <!-- <script src="java.js"></script>  -->
        <script src="jquery.js"></script>

</body>

</html>