<?php
// Variable Scope / lingkup variabel

// Variable local
$x = 10; 
// echo $x;

function tampilx() {
    // global $x;
    $x = 20;
    echo $x;
}

tampilx();

echo "<br>";
echo $x;
?>
