<?php

require '../actions/bdd/db.php';

$getAllAnswerThisQuestion = $bd->prepare('SELECT id_auteur, pseudo_auteur, id_question, contenu, date_reponse FROM reponses WHERE id_question =? ORDER BY id DESC');
$getAllAnswerThisQuestion-> execute(array($idOfTheQuestion));