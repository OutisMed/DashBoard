<?php 
session_start();
if(!isset($_SESSION['auth'])){
    header('location:../connexion/login.php');
}
// verifier si l'utilisateur est l'Admin $_SESSION['auth'] == 'Admin'