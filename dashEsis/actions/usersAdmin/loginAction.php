<?php 
session_start();
require '../actions/bdd/db.php';

// validation du formulaire
if(isset($_POST['valide'])){

    if(!empty($_POST['pseudo'])AND !empty($_POST['pass'])){
            // les données de l'utilisateurs
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_pass = htmlspecialchars ($_POST['pass']);

            // verifier si l'utilisateur existe déjà sur le site                
            $checkIfUserExists = $bd ->prepare("SELECT * from users WHERE pseudo = ?AND role = 'Admin' ");
            $checkIfUserExists->execute(array($user_pseudo));

            if($checkIfUserExists->rowCount() > 0){
                $userInfo = $checkIfUserExists->fetch();
                // verifier si le mot est le meme que celui qui dans la BDD
                if(password_verify($user_pass, $userInfo['pass'])){

                    // Authetifier l(utilisateur sur le site 
                    $_SESSION['auth']= true;
                    $_SESSION['id']= $userInfo['id'];
                    $_SESSION['firstname']=$userInfo['firstname'];
                    $_SESSION['lastname']=$userInfo['lastname'];
                    $_SESSION['pseudo']=$userInfo['pseudo'];
                    $_SESSION['role']=$userInfo['role'];


                    header('location:../menus/index.php');

                }else{
                    $errormsg = 'mot de passe ou pseudo incorrect..'; 
                }

            }else{
                $errormsg = 'mot de passe ou pseudo incorrect..';
            }


    }else{
        //$errormsg = 'Veuillez completez tous les champs...';
    }
}