<?php
include "connect.php";
$qry_detail_job=mysqli_query($conn,"select * from job where id_job = '".$_GET['id_job']."'");
$dt_job=mysqli_fetch_array($qry_detail_job);

if(isset($_POST['updatejobname'])){
    $username=$_POST['jobname'];
    $qry_update_username=mysqli_query($conn,"update job set namajob = '".$username."' where id_job = '".$dt_job['id_job']."'");
    header("location:showJobs.php");
}else if(isset($_POST['updatefoto'])){
    $foto=$_POST['foto'];
    $qry_update_foto=mysqli_query($conn,"update job set foto = '".$foto."' where id_job = '".$dt_job['id_job']."'");
    header("location:showJobs.php");
}else if(isset($_POST["updategaji"])){
    $gaji = $_POST["gaji"];
    $qry_update_gaji=mysqli_query($conn,"update job set gaji = '".$gaji."' where id_job = '".$dt_job['id_job']."'");
    header("location:showJobs.php");
}
?>