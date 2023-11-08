<?php
    include "header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <h2 align = "center">welcome <?=$_SESSION['username']?></h2>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        #p1{
            font-size: 100px;
            float: right;
        }
    </style>
</head>
<body>
    <img src="necroambasia.jpg"></img>
    <p id=p1>"<--web owner"</p>
    <div id=box1><a href="jobs.php">info loker</a></div>
</body>
</html>

<?php
    include "showbal.php";
?>