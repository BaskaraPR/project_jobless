<?php
if($_POST){
    $nama_depan=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgl_lahir= $_POST['tgl_lahir'];
    $jk= $_POST['jk'];
    if(empty($nama_depan)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into data_user (nama_user,alamat,tgl_lahir,jk) value ('".$nama_depan."','".$alamat."','".$tgl_lahir."','".$jk."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses mendaftar');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar');location.href='login.php';</script>";
        }
    }
}
?>