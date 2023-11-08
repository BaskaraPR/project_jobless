<?php
    include "connect.php";
    $qry_detail_job=mysqli_query($conn,"select * from job where id_job = '".$_GET['id_job']."'");
    $dt_job=mysqli_fetch_array($qry_detail_job);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update here</title>
</head>
<body>
    <h2>update</h2>
    <form action="updateJobProcess.php?id_job=<?=$dt_job['id_job']?>" method="post">
        <label for="username">Update Namajob:</label>
        <input type="text" id="jobname" name="jobname" required><br>
        <input type="submit" name="updatejobname" value="Update">
    </form>
    <form action="updateJobProcess.php?id_job=<?=$dt_job['id_job']?>" method="post">
        <label for="username">Update Foto:</label>
        <input type="file" id="foto" name="foto" required><br>
        <input type="submit" name="updatefoto"value="Update">
    </form>
    <form action="updateJobProcess.php?id_job=<?=$dt_job['id_job']?>" method="post">
        <label for="username">Update Gaji:</label>
        <input type="text" id="gaji" name="gaji" required><br>
        <input type="submit" name="updategaji"value="Update">
    </form>
    <table>
        <tr>
            <td>
                <a href="showJobs.php">Kembali</a>
            </td>
            <td>
                <a href="showJobs.php">Simpan</a>
            </td>
        </tr>
    </table>
</body>
</html>