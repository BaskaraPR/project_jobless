<?php
if($_POST){
    $nama_depan=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $notelp= $_POST['notp'];
    $cv= $_POST['cv'];
    if(empty($nama_depan)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into register (nama_user,alamat,no_telp,cv) value ('".$nama_depan."','".$alamat."','".$notelp."','".$cv."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses mendaftar');location.href='jobtaken.php';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar');location.href='login.php';</script>";
        }
    }
}
?>