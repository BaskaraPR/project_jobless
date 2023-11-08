<?php
    include "connect.php";
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namajob = $_POST["namajob"];
    $gaji = $_POST["gaji"];
    $adminname = $_POST["namaadmin"];
    $foto = $_POST["foto"];

    $insert=mysqli_query($conn,"insert into job (namajob,gaji,nama_admin,foto,id_admin) value ('".$namajob."','".$gaji."','".$adminname."','".$foto."','".@$_SESSION['id_user']."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambah');location.href='showJobs.php';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar');location.href='addjob.php';</script>";
    }

}
?>