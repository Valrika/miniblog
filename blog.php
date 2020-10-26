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

//relier table category à l'entrée ID_category de la table article

//après AS un alias = nom plus clair aux champs utilisés, 
//ici l'entrée ID_category de la table article est renommée name_category 
//et l'entrée category_name de la table category est renommée category_all
//a = alias de la table article et c alias de la table category
//https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916084-les-jointures-entre-tables

//SELECT a.ID_category AS name_category,  c.category_name AS category_all
//FROM article AS a, category AS c
//WHERE a.ID_category = c.ID


//même requête avec JOIN (recommandée)
//je récupère les données de la table category INNER JOIN = jointure interne avec la table article
//la clause ON fait a liaison entre les deux champs
//alias : a = table article, c = table category, name_category = ID_category de la table article, category_all = category_name de la table category
SELECT a.ID_category AS name_category,  c.category_name AS category_all
FROM category c
INNER JOIN article a
ON a.ID_category = c.ID


?>
