<?php
$siswa = [
    [
    "nama" => "Bryan Fajar",
    "nis" => "345678",
    "email" => "bryanfajarazhari@gmail.com",
    "jurusan" => "informatika",
    "gambar" => "siswa0.jpg"
    ],
    [
    "nama" => "Evan Dimas",
    "nis" => "345987",
    "email" => "evandimas@gmail.com",
    "jurusan" => "Sistem Informasi",
    "gambar" => "siswa3.jpg"
    ]
];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1> Daftar Siswa</h1>
    <ul>
    <?php foreach($siswa as $s) : ?>
        
            <li>
                <a href="latihan2.php?nama=<?= $s["nama"];?> &nis=
                <?= $s["nis"]; ?>&email=<?= $s["email"]; ?>
                &jurusan=<?= $s["jurusan"]; ?>
                &gambar=<?= $s["gambar"]; ?>">
                <?= $s["nama"]; ?></a>
            </li>
    
    <?php endforeach; ?>
    </ul>
</body>
</html>