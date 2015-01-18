<?php
session_start();
$haslo = $_POST["haslo"];
$_SESSION['haslo'] = $haslo;
header("Location: index.php"); 
?>