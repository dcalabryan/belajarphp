<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
</head>
<body>
    <ul>
        <li><img src="img/siswa0.jpg" <?= $_GET["gambar"];?>></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nis"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan2.php">Kembali ke daftar siswa</a>
</body>
</html>