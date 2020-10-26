<?php 

//page pour créer un article

//récupérer le contenu du titre et le stocker dans la BDD
//récupérer la date et le stocker dans la BDD
//récupérer le contenu de l'article et le stocker dans la BDD

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

echo $slug,


?>