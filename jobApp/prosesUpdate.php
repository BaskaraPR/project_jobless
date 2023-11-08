<?php
include "connect.php";
session_start();

if(isset($_POST['updateuser'])){
    $username=$_POST['username'];
    $qry_update_username=mysqli_query($conn,"update user set username = '".$username."' where id_user = '".$_SESSION['id_user']."'");
    header("location:profil.php");
}else if(isset($_POST['updatefoto'])){
    $foto=$_POST['foto'];
    $qry_update_foto=mysqli_query($conn,"update user set foto = '".$foto."' where id_user = '".$_SESSION['id_user']."'");
    header("location:profil.php");
}
?>
