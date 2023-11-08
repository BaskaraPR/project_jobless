<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar sek</title>
</head>
<body>
<h2>Daftar rek</h2>
    <form action="prosesDaftar.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="notelp">No Telp:</label>
        <input type="number" id="notelp" name="notelp" required><br>

        <label for="jk">Jenis Kelamin:</label>
        <select name="jk" class="form-control">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <input type="submit" value="Register">
    </form>
</body>
</html>