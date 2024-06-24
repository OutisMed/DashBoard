<?php

require '../actions/bdd/db.php';

if(isset($_GET['id']) AND !empty($_GET)){

    $idOfQuestion = $_GET['id'];

    $checkIfQuestionExiste = $bd->prepare('SELECT * FROM questions WHERE id = ? ORDER BY id DESC');
    $checkIfQuestionExiste->execute(array($idOfQuestion));

    if($checkIfQuestionExiste->rowCount() > 0){

        $questionInfo = $checkIfQuestionExiste->fetch();
            $question_titre = $questionInfo['titre'];
            $question_description = $questionInfo['description'];
            $question_contenu = $questionInfo['contenu'];
            $question_date = $questionInfo['date_publication'];
            $question_categorie = $questionInfo['categorie'];

            $question_description = str_replace('<br />', '',$question_description);
            $question_contenu = str_replace('<br />', '',$question_contenu);


    }else{
        $errormsg = 'aucune question n\'a été trouvée.......';
    }

}else{
    $errormsg = 'aucune question n\'a été trouvée..';
}