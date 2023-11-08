<?php
    include "adminHeader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
</head>
<body>
    <h2 align = "center">welcome <?=$_SESSION['username']?></h2>
    <h1>Manage your Jobs</h1>
    <a href="showJobs.php" class ="btn btn-primary">My Jobs</a>
</body>
</html>