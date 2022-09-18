<!--
    Built-in Function
    http://php.net/manual/en/funcref.php

    User-Defined Function
 -->

 <!-- Date/Time
time ()
date ()
mktime ()
strtotime ()
-->

<?php
// echo date ("l, d-M-y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo date("l", time()+12800);
// echo date ("l", time()+60*60*24*100);
// echo date ("d M Y", time()-60*60*24*100);

// mktime
// membuat detik sendiri
// echo date ("l", mktime(0,0,0,11,5,2004));
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,4,26,2001));

// strtotime
echo date("l", strtotime("10 aug 2022"));

// String : strlen(), strcmp(), explode(), htmlspecialchars()
// Utility (Bantuan) : var_dump(), isset(), empty(), die(), sleep()

// User-defined function

?>