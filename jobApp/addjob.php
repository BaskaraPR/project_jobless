<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loker</title>
</head>
<body>
    <h1>loker</h1>
    <form action="prosesNewjob.php" method="post">
        <label for="username">Nama:</label>
        <input type="text" id="namajob" name="namajob" required><br>

        <label for="gaji">Gaji:</label>
        <input type="text" id="gaji" name="gaji" required><br>

        <label for="nama_admin">Nama Admin:</label>
        <input type="text" id="namaadmin" name="namaadmin" required><br>

        <label for="foto">Foto</label>
        <input type="file" id="foto"name="foto"required><br>

        <input type="submit" value="Create">
    </form>
</body>
</html>