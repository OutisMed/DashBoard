<?php

require '../actions/bdd/db.php';

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfTheQuestion = $_GET['id'];

    $checkIfQuestionExists = $bd->prepare('SELECT * FROM questions WHERE id =?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){
        $questionsInfo = $checkIfQuestionExists->fetch();

        $question_titre = $questionsInfo['titre'];
        $question_description = $questionsInfo['description'];
        $question_contenu = $questionsInfo['contenu'];
        $question_id_author = $questionsInfo['id_auteur'];
        $question_pseudo_author = $questionsInfo['pseudo_auteur'];
        $question_date = $questionsInfo['date_publication'];
        $question_categorie = $questionsInfo['categorie'];

    }else{
        $errormsg= 'Aucune question n\'a été trouvée..';
    }

}else{
    $errormsg ='Aucune question n\'a été trouvée............';
}