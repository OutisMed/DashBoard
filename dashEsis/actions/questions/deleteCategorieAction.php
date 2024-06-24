<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('location:../../connexion/login.php');
}

require '../bdd/db.php';

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfTheQuestion = $_GET['id'];
    // recuperer l'ID de l'auteur 
    $checkIfQuestionExists = $bd->prepare('SELECT id_auteur FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){
        $questionsInfo = $checkIfQuestionExists->fetch();
        if($questionsInfo['id_auteur']){ // pour Administrateur

            $deleteThisQuestion = $bd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));


            header('location:../../forums/forum_Discussion.php');

        }else{
           // echo "vous n'avez pas le droit de supprimer une question qui ne vous appertient pas !";
        }

    }else{
        echo 'aucune question n\'a été trouvéé.....';
    }

}else{
    echo 'aucune question n\'a été trouvéé';
}