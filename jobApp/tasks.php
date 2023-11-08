<?php 
    include "header.php";
?>
<h2>you need to finish these</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Start Working</th><th>Deadline</th><th>Task</th><th>Gaji</th><th>Status</th><th>Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "connect.php";    
        $qry_histori=mysqli_query($conn,"select * from guywhoapply where id_user = '".$_SESSION['id_user']."' order by id_apply desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            $job_dilamar="<ol>";
            $qry_jobs=mysqli_query($conn,"select * from  jobthatgotapplied join job on job.id_job=jobthatgotapplied.id_job where id_apply = '".$dt_histori['id_apply']."'");
            while($dt_jobs=mysqli_fetch_array($qry_jobs)){
                $job_dilamar.="<li>".$dt_jobs['namajob']."</li>";
            }
            $job_dilamar.="</ol>";

            $gajiwww="<ol>";
            $qry_gaji=mysqli_query($conn,"select * from  jobthatgotapplied join job on job.id_job=jobthatgotapplied.id_job where id_apply = '".$dt_histori['id_apply']."'");
            while($dt_gaji=mysqli_fetch_array($qry_gaji)){
                $gajiwww.="<li>".$dt_gaji['gaji']."</li>";
            }
            $gajiwww.="</ol>";

            $qry_cek_kembali=mysqli_query($conn,"select * from salarycut where id_apply = '".$dt_histori['id_apply']."'");
            if(mysqli_num_rows($qry_cek_kembali)>0){
                $dt_kembali=mysqli_fetch_array($qry_cek_kembali);
                $denda="denda Rp. ".$dt_kembali['cut'];
                $status_kembali="<label class='alert alert-success'>Finished!!</label>";
                $button_kembali="";
            } else {
                $status_kembali="<label class='alert alert-danger'>Unfinished</label>";
                $button_kembali="<a href='finishJob.php?id=".$dt_histori['id_apply']."' class='btn btn-success' onclick='return confirm(\"duwit++\")'>Finish</a>";
            }
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['starting_time']?></td><td><?=$dt_histori['deadline']?></td><td><?=$job_dilamar?></td><td><?=$gajiwww?></td><td><?=$status_kembali?></td><td><?=$button_kembali?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
