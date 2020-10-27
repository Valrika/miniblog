<?php 

//page pour créer un article

//récupérer le contenu du titre et le stocker dans la BDD
//récupérer la date et le stocker dans la BDD
//récupérer le contenu de l'article et le stocker dans la BDD
//nom prénom date catégorie rédiger + envoyer

//rediriger vers une page "article bien envoyé"

//ATTENTION VERIFIER NOM VARIABLES DANS LE HTML


$slug = '';

if (isset ($_POST["create"]))
{
    $slug = preg_replace('/[^a-z0-9]+/i', '-',  trim(strtolower($_POST["title"])));

//vérifier cohérence avec ma BDD
    $query = "SELECT slug_url FROM slug WHERE slug_url LIKE '$slug%'";

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
    ':slug_title' => $_POST["title"],
    ':slug_url' => $slug
);

$query = "INSERT INTO slug (slug_title, slug_url) VALUES (:slug_title, :slug_url)";
$statement = $connect->prepare($query);
$statement->execute($insert_data);

}

//dans le title entre deux balises php

echo $slug;


?>

<html lang="fr">
<head>
    <title>Beaute O Naturel</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
    <div class="navbar-header "></div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">Accueil</a>
            <a class="navbar-brand" href="articles.php">Articles</a>
            <a class="navbar-brand" href="#">A propos</a>
            <a class="navbar-brand" href="#">Contact</a>
            <a class="navbar-brand" href="create_article.php">créer un article</a>

        </nav>
    </div>

</header>



</html>
