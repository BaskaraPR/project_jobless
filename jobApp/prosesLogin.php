<?php
include "connect.php";
session_start();
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".$password."'");
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            if ($dt_login['role'] == 'admin') {
                session_start();
                $_SESSION['id_user'] = $dt_login['id_user'];
                $_SESSION['username'] = $dt_login['username'];
                $_SESSION['role'] = 'admin';
                $_SESSION['status_login'] = true;
                header("location: adminHome.php");
            } else if ($dt_login['role'] == 'customer') {
                session_start();
                $_SESSION['id_user'] = $dt_login['id_user'];
                $_SESSION['username'] = $dt_login['username'];
                $_SESSION['role'] = 'siswa';
                $_SESSION['status_login'] = true;
                header("location: home.php");
            } else {
                echo "<script>alert('Role tidak valid');location.href='login.php';</script>";
            }
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}

?>
