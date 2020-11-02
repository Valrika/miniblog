<?php

//page pour afficher un article seul avec ses commentaires

require('header.php');

//génère juste l'article cliqué en passant par le slug de l'url

$slug = $_GET["slug"];

//envoyer le slug dans la bdd et comparer avec le contenu ?

$articles_query = $pdo->query("SELECT * FROM article WHERE slug='$slug'");
$articles = $articles_query->fetchAll();

var_dump($articles);

//affiche chaque élément de l'article demandé

$author = ["author_name"];
$title = ["title"];
$category = ["ID_category"];
$date = ["created_at"];
$content = ["content"];

echo $author;
echo $title;
echo $category;
echo $date;
echo $content;

//section commentaire à ajouter

?>