<?php

//page pour afficher un article seul avec ses commentaires

require('header.php');

//génère juste l'article cliqué en passant par le slug de l'url

$slug = $_GET["slug"];

//envoyer le slug dans la bdd et comparer avec le contenu ?

$articles_query = $pdo->query("SELECT * FROM article WHERE slug='$slug'");
$articles = $articles_query->fetchAll();

//affiche chaque élément de l'article demandé
//$article contient une liste de lignes, [0] contient la première des lignes, ensuite j'appelle les attributs que je veux ["title"]["content"], etc.

$title = $articles[0]["title"];
$author = $articles[0]["author_name"];
$category = $articles[0]["ID_category"];
$date = $articles[0]["created_at"];
$content = $articles[0]["content"];

echo $author;
echo $title;
echo $category;
echo $date;
echo $content;

//section commentaire à ajouter

?>