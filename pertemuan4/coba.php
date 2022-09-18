<?php
session_start();

$_SESSION['Latih'] = "JOSH";
echo $_SESSION['Latih'];

// unset($_SESSION['Latih']);
session_destroy;
?>