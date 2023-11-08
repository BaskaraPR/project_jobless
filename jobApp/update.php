<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update profile</title>
</head>
<body>
    <h2>lmao ez</h2>
    <form action="prosesUpdate.php" method="post">
        <label for="username">Update Username:</label>
        <input type="text" id="username" name="username" required><br>
        <input type="submit" name="updateuser" value="Update">
    </form>
    <form action="prosesUpdate.php" method="post">
        <label for="username">Update Foto:</label>
        <input type="file" id="foto" name="foto" required><br>
        <input type="submit" name="updatefoto"value="Update">
    </form>
    <table>
        <tr>
            <td>
                <a href="profil.php">Kembali</a>
            </td>
            <td>
                <a href="profil.php">Simpan</a>
            </td>
        </tr>
    </table>
</body>
</html>