<?php

require '../actions/bdd/db.php';
// validation du formulaire
if(isset($_POST['valide'])){
    // verifier si les données sont remplis
    if(!empty($_POST['titre']) AND !empty($_POST['description']) AND !empty($_POST['content']) AND !empty($_POST['categorie'])){
        // les données à faire passées dans la requette
        $new_question_titre = htmlspecialchars($_POST['titre']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_content = nl2br(htmlspecialchars($_POST['content']));
        $new_question_categorie =($_POST['categorie']);
        // Modifeir les informations de la question qui possede l'id entrer en parametre dans l'URL
        $editQuestionOnWebSite = $bd->prepare('UPDATE questions SET titre =?, description = ?, contenu =?, categorie = ? WHERE id = ?');
        $editQuestionOnWebSite->execute
        (array(
            $new_question_titre,
            $new_question_description,
            $new_question_content,
            $new_question_categorie,
            $idOfQuestion
            ));
        // redirection
        header('location:forum_Discussion.php');

    }else{
        $errormsg = 'veuillez remplir tous les champs...';
    }
}