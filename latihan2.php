<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
</head>
<body>

<form action="proses.php" method="post">
    <label for="angka">Masukkan Angka:</label>
    <input type="number" name="angka" id="angka" required>

    <label for="operasi">Pilih Operasi:</label>
    <select name="operasi" id="operasi" required>
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
    </select>

    <button type="submit" name="hitung">Hitung</button>
</form>

</body>
</html>
