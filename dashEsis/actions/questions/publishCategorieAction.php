<?php 
require '../actions/bdd/db.php';


// validation du formulaire
if(isset($_POST['valide'])){


    if(!empty($_POST['titre'])AND !empty($_POST['description']) AND !empty($_POST['content']) AND isset($_POST['categorie'])){

        $question_titre = htmlspecialchars($_POST['titre']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content'])) ;
        $question_date = date('d/m/y à H:i:s');
        $question_categorie = $_POST['categorie'];
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];
        
        
        $insertQuestionInWebSite =$bd-> prepare('INSERT INTO questions(titre, description, contenu, id_auteur,pseudo_auteur,date_publication, categorie) VALUES(?,?,?,?,?,?,?)');
        $insertQuestionInWebSite -> execute(
            array(
                $question_titre,
                $question_description,
                $question_content,
                $question_id_author,
                $question_pseudo_author,
                $question_date,
                $question_categorie
            ));

        $succesmsg ='votre question a été bien publier sur le site ...';

    }else{
        $errormsg = 'veillez remplir tous les champs...';
    }

}

    
          
