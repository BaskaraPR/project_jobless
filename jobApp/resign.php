<?php
    session_start();
    unset($_SESSION['info'][$_GET['id']]);
    header('location: appliedJob1.php');
?>
