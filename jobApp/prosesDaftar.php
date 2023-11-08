<?php
    include "connect.php";
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input from the registration form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $notelp = $_POST["notelp"];
    $jk = $_POST["jk"];

    $insert=mysqli_query($conn,"insert into user (username,email,password,notelp,jk) value ('".$username."','".$email."','".$password."','".$notelp."','".$jk."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses mendaftar');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar');location.href='daftarUser.php';</script>";
    }

}
?>