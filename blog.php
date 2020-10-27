<?php 

//NOTES POUR LE PROJET MINIBLOG

//TODO dans articles ajouter un champ content (déjà rempli dans la data base avec du lorem ipsum)
//TODO dans articles ajouter un champ update pour afficher la date de mise à jour de l'article
//TODO dans articles ajouter un champ avec le nom de l'auteur
//TODO pour plus tard : afficher un nombre d'articles maximum par page ?


//TODO remettre à l'endroit le format de la date



//connexion à la base de données
$pdo = new PDO('mysql:host=mysql;dbname=miniblog;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

?>
