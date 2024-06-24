<?php

require '../actions/bdd/db.php';

if(isset($_POST['valide'])){

    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer'])); 
        $user_date = date('d/m/y à H:i:s');


        $insertAnswer = $bd->prepare('INSERT INTO reponses(id_auteur, pseudo_auteur, id_question, contenu, date_reponse) VALUES(?,?,?,?,?)');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfTheQuestion, $user_answer, $user_date));
    }

}