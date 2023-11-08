<?php 
    include "header.php";
    include "connect.php";
    $qry_detail_job=mysqli_query($conn,"select * from job where id_job = '".$_GET['id_job']."'");
    $dt_job=mysqli_fetch_array($qry_detail_job);
?>
<h2>ambil kerjo sek</h2>
<div class="row">
    <div class="col-md-4">
        <img src="data:image/png;base64,<?=base64_encode($dt_job['foto'])?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="appliedJob.php?id_job=<?=$dt_job['id_job']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td><label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label>
                            <input type="text" id="email" name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="notelp">No.Telp:</label>
                            <input type="number" id="notelp" name="notelp" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Pekerjaan</td><td><?=$dt_job['namajob']?></td>
                    </tr>
                    <tr>
                        <td>Gaji</td><td><?=$dt_job['gaji']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Apply"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
