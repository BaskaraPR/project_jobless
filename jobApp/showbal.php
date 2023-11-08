<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        #amba{
            top: 100px;
        }
    </style>
</head>
<body>
<div class="row" id = amba>
    <?php
    include "connect.php";
    $qry_profile=mysqli_query($conn,"select * from user where username = '".$_SESSION['username']."'");
    while($dt_profile=mysqli_fetch_array($qry_profile)){
        ?>
        <div class="col-md-3">
            <div class="card" > 
              <div class="card-body">
                <h3 class="card-text">your money:   <?=$dt_profile['balance']?></h3>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>
