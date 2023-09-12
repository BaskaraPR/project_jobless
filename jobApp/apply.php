<?php
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Apply here</h3>
    <form action="process_apply.php" method="post">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        Alamat :
        <input type="text" name="alamat" value="" class="form-control">
        No.telp :
        <input type="text" name="notp" value="" class="form-control">
        CV :
        <input type="file" name="cv" value="" class="form-control">
        <!-- Tanggal Lahir : 
        <input type="date" name="tgl_lahir" value="" class="form-control">
        Jenis Kelamin : 
        <select name="jk" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select> -->
        <input type="submit" name="simpan" value="Apply" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>