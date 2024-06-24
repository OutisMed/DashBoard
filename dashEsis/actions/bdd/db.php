<?php 
// connexion vers la base de données 
try{
    
    $bd = new PDO('mysql:host=localhost; dbname=forum', 'root', '');
}catch(Exception $e){
    die('une erreur a été trouvée '.$e->getMessage());
}
