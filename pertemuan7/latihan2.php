<?php
// $siswa = [
//     ["Ronaldo", "121314", "RPL", "ronaldo@gmail.com"],
//     ["Ronaldinho", "121314", "RPL", "ronaldinho@gmail.com"],
//     ["Neymar", "213445", "RPL", "ney@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
// echo $siswa[1]["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1> Daftar Siswa </h1>

<?php foreach ($siswa as $s) : ?>
    <ul>
        <li>
            <img src="img/<?= $s["gambar"]; ?>">
        </li>
        <li> Nama :<?= $s["nama"]; ?></li>
        <li> NIS : <?= $s["nis"]; ?></li>
        <li> Jurusan : <?= $s["jurusan"]; ?></li>
        <li> Email : <?= $s["email"]; ?></li>
    </ul>
<?php endforeach;?>
</body>
</html>