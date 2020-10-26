<?php 

//Simulateur de blog

//Article : ID, title, content, created at, updated at, slug, category_id (relié à category name)
//Category : ID (ai), category name, slug


//se connecter à la base de données
//connecter les deux tables l'une à l'autre avec JOIN
//pouvoir afficher un article en cliquant sur son titre
//pouvoir afficher un article en cliquant sur sa catégorie
//pouvoir afficher un article en cliquant sur sa date





$pdo = new PDO('mysql:host=mysql;dbname=miniblog;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);





?>
