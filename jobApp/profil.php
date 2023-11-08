<?php
    include "connect.php";
    if(@$_SESSION['role'] === 'admin'){
        include "adminHeader.php";
    }else{
        include "header.php";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
</head>
<body>
<h2>Your profie</h2>
<div class="row">
    <?php
    include "connect.php";
    $qry_profile=mysqli_query($conn,"select * from user where id_user = '".$_SESSION['id_user']."'");
    while($dt_profile=mysqli_fetch_array($qry_profile)){
        ?>
        <div class="col-md-3">
            <div class="card" > 
              <img src="data:image/png;base64,<?=base64_encode($dt_profile['foto'])?>" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">username : <?=$dt_profile['username']?></h3>
                <h3 class="card-title">Email : <?=$dt_profile['email']?></h3>
                <h3 class="card-title">No.Telp : <?=$dt_profile['notelp']?></h3>
                <h4 class="card-text">your money:   <?=$dt_profile['balance']?></h4>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</div>
<div class="btn btn-success" >
    <a href="update.php">update</a>
</div>
</body>
</html>