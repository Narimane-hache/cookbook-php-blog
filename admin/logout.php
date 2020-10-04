<?php
// Initialiser la session 
session_start(); 
// blog de narimane hacheche
// Dénisitalisation des variables de la session 
$_SESSION = array();
// Detruire la session 
session_destroy();
// Redirection 
// blog de narimane hacheche
header("location: login.php");
exit;
?>