<?php 
include "connect.php";
if($_GET['id']){
    gajiancoy();
    finishing();
}

function finishing(){
    session_start();
    include "connect.php";
    $id_applying=$_GET['id'];
    $cek_terlambat=mysqli_query($conn, "select * from jobthatgotapplied where id_apply = '".$id_applying."' and id_taken = '".$id_applying."'");
    $dt_ddline=mysqli_fetch_array($cek_terlambat);
    if(strtotime($dt_ddline['deadline'])>=strtotime(date('Y-m-d'))){
        $denda=0;
    } else{
        $harga_denda_perhari=1000;
        $tanggal_kembali = new DateTime();
        $tgl_harus_kembali = new DateTime($dt_ddline['deadline']); 
        $selisih_hari = $tanggal_kembali->diff($tgl_harus_kembali)->d;
        $denda=$selisih_hari*$harga_denda_perhari;
    }
    mysqli_query($conn, "insert into salarycut (id_apply, deadline,cut) value('".$id_applying."','".date('Y-m-d')."','".$denda."')");
    header('location: tasks.php');
}

function gajiancoy(){
    session_start();
    include "connect.php";
    $id_applying=$_GET["id"];
    $cek_gaji = mysqli_query($conn,"select gaji from jobthatgotapplied where id_apply = '".$id_applying."'");
    $dt_gaji = mysqli_fetch_array($cek_gaji);
    $cek_bal_user = mysqli_query($conn,"select balance from user where id_user = '".$_SESSION['id_user']."'");
    $dt_bal = mysqli_fetch_array($cek_bal_user);
    if ($dt_gaji !== null && $dt_bal !== null) {
        $gajifix = $dt_gaji['gaji'] + $dt_bal['balance'];
        $masukgaji = mysqli_query($conn,"update user set balance = '".$gajifix."' where id_user = '".$_SESSION['id_user']."'");
        header('location: tasks.php');
    }
}
?>
