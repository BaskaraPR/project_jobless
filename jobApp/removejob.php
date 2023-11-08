<?php
    include "connect.php";
    $qry_del = mysqli_query($conn,"delete from job where id_job = '".$_GET['id_job']."'");
    header("location:showJobs.php");
?>