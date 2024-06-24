<?php

require '../actions/bdd/db.php';
// recuperer les questions par défaut sans la recherche
$getAllQuestions =$bd->query('SELECT id, id_auteur,titre, description, pseudo_auteur, date_publication, categorie FROM questions ORDER BY id DESC LIMIT 0,5');
// verifier si une recherche a été entrez par l'utiolisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){
    $userChearch = $_GET['search'];
    // recuperer toutes les recherches qui correspondent à la recherche (en fonction du titre)
    $getAllQuestions = $bd->query('SELECT id, id_auteur,titre, description, pseudo_auteur, date_publication, categorie FROM questions WHERE titre LIKE "%'.$userChearch.'%" ORDER BY id DESC');

}