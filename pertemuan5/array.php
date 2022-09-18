<?php
// Array (larik) merupakan suatu tipe
// data terstruktur yang dapat menyimpan
// banyak data dengan suatu nama yang sama
// yang menempati memori yang berurutan
// dan dengan tipe data yang sama.
// Araay dapat diakses menggunakan indexnya,
// index array dimulai dari 0,
// namun adapula bisa diakses dari index bukan 0. Untuk mengakses array biasanya menggunakan perulangan (looping).

// Array Numeric adalah jenis array yang menggunakan index angka, index dimulai dari angka 0.
// $jurusan[1] = 'RPL';
// $jurusan[2] = 'PPLG';
// $jurusan[3] = 'UPW';
// $jurusan[4] = 'BDP';

// print_r($jurusan);

$jurusan = array("Teknik Informatika", "Sistem Informasi", "Teknik Komputer", "Manajemen Informatika");
$jumlah_array = count($jurusan);
for($i = 0; $i < $jumlah_array ; $i++) {
    echo "Jurusan ".$jurusan[$i]." - ada di index $i";
    echo "<br>";
}

?>
