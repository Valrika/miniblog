<?php 

//NOTES, ESSAIS ET RECHERCHES POUR LE PROJET MINIBLOG


//Simulateur de blog

//Article : ID, title, content, created at, updated at, slug, category_id (relié à category name)
//Category : ID (ai), category name, slug


//se connecter à la base de données avec JOIN
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
//SELECT a.ID_category AS name_category,  c.category_name AS category_all
//FROM category c
//INNER JOIN article a
//ON a.ID_category = c.ID

//créer slug : https://www.webslesson.info/2018/06/how-to-create-unique-url-slug-in-php.html
//ATTENTION VERIFIER NOM VARIABLES DANS LE HTML
$slug = '';

if (isset ($_GET["ville"]))
{
    $slug = preg_replace('/[^a-z0-9]+/i', '-',  trim(strtolower($_GET["title"])));


    var_dump($slug);

//vérifier cohérence avec ma BDD
    //$query = "SELECT slug_url FROM slug WHERE slug_url LIKE '$slug%'";

    $statement = $connect->prepare($query);
    if($statement->execute())
    {
        $total_row = $statement->rowCount();
        if($total_row > 0)
        {
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
                $data[] = $row['slug_url'];
            }
            if(in_array($slug, $data))
            {
                $count = 0;
                while(in_array(($slug . '-' . ++ $count), $data) );
                $slug = $slug . '-' . $count;
            }
        }
    }

    $insert_data = array(
        ':slug_title' => $_GET["title"],
        ':slug_url' => $slug
    );

    $query = "INSERT INTO slug (slug_title, slug_url) VALUES (:slug_title, :slug_url)";
    $statement = $connect->prepare($query);
    $statement->execute($insert_data);

}


//dans le title entre deux balises php

echo $slug,


?>
