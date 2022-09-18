<?php
$siswa = [
    ["Ronaldo", "121314", "RPL", "ronaldo@gmail.com"],
    ["Ronaldinho", "121314", "RPL", "ronaldinho@gmail.com"],
    ["Neymar", "213445", "RPL", "ney@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Siswa </h1>

    <!-- <ul>
        <li>SMK 2</li>
        <li>1231435</li>
        <li>RPL</li>
        <li>smk2@gmail.com</li>
    </ul> -->
    <!-- <ul>
        <?php foreach( $siswa as $s ) : ?>
            <li><?= $s; ?> </li>
        <?php endforeach; ?>
    </ul> -->
<?php foreach ($siswa as $s) : ?>
    <ul>
        <li> Nama :<?= $s[0]; ?></li>
        <li> NIS : <?= $s[1]; ?></li>
        <li> Jurusan : <?= $s[2]; ?></li>
        <li> Email : <?= $s[3]; ?></li>
    </ul>
<?php endforeach;?>
</body>
</html>