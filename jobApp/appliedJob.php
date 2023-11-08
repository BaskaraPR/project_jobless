<?php 
session_start();
    if($_POST){
        include "connect.php";
        
        $qry_get_job=mysqli_query($conn,"select * from job where id_job = '".$_GET['id_job']."'");
        $dt_job=mysqli_fetch_array($qry_get_job);
        $_SESSION['id_job'] = $dt_job['id_job'];
        $_SESSION['info'][]=array(
            'id_job'=>$dt_job['id_job'],
            'namajob'=>$dt_job['namajob'],
            'gaji'=>$dt_job['gaji']
        );
    }
    header('location: appliedJob1.php');
?>