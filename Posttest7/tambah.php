<?php
session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: Login.php");
    exit;
}

require "config.php";

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $telpon = $_POST['telpon'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $nama_gambar = $_POST['nama_gambar'];
  $gambar = $_FILES['gambar']['name'];

  date_default_timezone_set('Asia/Makassar');
  $date = strtotime("now");
  $tanggal = date("Y-m-d H:i:s", $date);


  $query = mysqli_query($db, "INSERT INTO pendaftar (nama,telpon,alamat,email) VALUES ('$nama','$telpon','$alamat','$email')");
  if (!empty($_FILES['gambar']['name'])) {

    $query = mysqli_query($db, "SELECT * FROM pendaftar WHERE email='$email'");
    $result = mysqli_fetch_assoc($query);
    $id = $result['id'];
    $nama_gambar = $_POST['nama_gambar'];
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $gambar_baru = "$nama_gambar.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, "images/$gambar_baru")) {
      $query = mysqli_query($db, "INSERT INTO cleaning (id,nama_gambar,file,tanggal) VALUES ($id,'$nama','$gambar_baru','$tanggal');");
      // $query = mysqli_query($db, "INSERT INTO cleaning (id,nama_gambar,file,tanggal) VALUES (5, 'yo', 'ya', '2022-10-10');");

      if ($query) {
        header("Location:index.php");
      } else {
        echo "Tambah data error";
      }
    }
  }
}
