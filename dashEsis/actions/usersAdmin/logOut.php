<?php 

session_start();
$_SESSION = [];
session_destroy();
header('location:../../connexion/login.php');