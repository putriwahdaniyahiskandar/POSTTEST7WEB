<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: Login.php");
}
require "config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM pendaftar WHERE id=$_GET[id]");
  if($query){
    header("Location:index.php");
  } else {
    echo "Delete gagal";
  }
}
?>