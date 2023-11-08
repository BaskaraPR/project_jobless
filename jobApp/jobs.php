<?php
    include "header.php";
?>

<h2>Daftar Pekerjaan</h2>
<div class="row">
    <?php 
    include "connect.php";
    $qry_job=mysqli_query($conn,"select * from job");
    while($dt_job=mysqli_fetch_array($qry_job)){
        ?>
        <div class="col-md-3">
          <div class="card" >
            <img src="data:image/png;base64,<?=base64_encode($dt_job['foto'])?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?=$dt_job['namajob']?></h5>
              <p class="card-text"><?=substr($dt_job['gaji'], 0,20)?></p>
              <a href="apply.php?id_job=<?=$dt_job['id_job']?>" class="btn btn-primary">Lamar</a>
            </div>
          </div>
        </div>
        <?php
    }
    ?>
</div>

<?php
  include "showbal.php";
?>