<?php
    include "header.php";
?>

<!DOCTYPE html>
<body>
    <h2>Avalaible Jobs</h2>
    <hr>
    <div class="row">
    <?php 
    include "koneksi.php";
    $qry_list=mysqli_query($conn,"select * from joblist");
    while($dt_job=mysqli_fetch_array($qry_list)){
        ?>
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
          <div class="col-md-4">
        </div>
       <div class="col-md-8">
              <div class="card-body">
              <h5 class="card-title"><?=$dt_job['nama']?></h5>
                <p class="card-text">By : <?=substr($dt_job['uploader'], 0,20)?></p>
                <p class="card-text">Lokasi : <?=substr($dt_job['location'], 0,20)?></p>
                <p class="card-text">Gaji : <?=substr($dt_job['revenue'], 0,20)?></p>
                <p class="card-text"><?=substr($dt_job['status'], 0,20)?></p>
                <form action="apply.php" method="post">
                <input type="submit" name="simpan" value="Apply" class="btn btn-primary">
                </form>
             </div>
            </div>
          </div>
        </div>
        <?php
      }
    ?>
    </div>
</body>
