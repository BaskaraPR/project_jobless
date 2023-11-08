<?php
    include "adminHeader.php";
?>

<h2>Daftar Pekerjaanmu</h2>
<div class="row">
    <?php 
    include "connect.php";
    $qry_job=mysqli_query($conn,"select * from job where id_admin = '".$_SESSION['id_user']."'");
    while($dt_job=mysqli_fetch_array($qry_job)){
        ?>
        <div class="col-md-3">
          <div class="card" >
            <img src="data:image/png;base64,<?=base64_encode($dt_job['foto'])?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?=$dt_job['namajob']?></h5>
              <p class="card-text"><?=substr($dt_job['gaji'], 0,20)?></p>
              <a href="updateJob.php?id_job=<?=$dt_job['id_job']?>" class="btn btn-primary">Edit</a>
              <a href="removejob.php?id_job=<?=$dt_job['id_job']?>" class="btn btn-danger">Remove</a>
            </div>
          </div>
        </div>
        <?php
    }
    ?>
</div>
  <a href="addjob.php" class="btn btn-primary">Tambah</a>
</div>
