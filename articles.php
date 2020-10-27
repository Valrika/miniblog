<?php

//page qui affiche tous les articles publiés

require('blog.php');
//require('header.php');


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

<br>
<br>

<body>
</div>

<?php

//afficher un seul article avec son titre, sa date de création, son contenu et son image
//afficher tous les articles les un à la suite des autres dans l'ordre antechronologique


//boucle qui récupère en php tous les articles pour remplacer la page


?>

<!--titre de la catégorie-->
<h6 class="text-center">
    <?php 
        $category = $pdo->query('SELECT category_name FROM category');
        $category = $category->fetch();
            echo $category['category_name']; 
    ?>
</h6>

<!--titre de l'article-->
<h3 class="text-center">
    <?php
        $title = $pdo->query('SELECT title FROM article');
        $title = $title->fetch();
            echo $title['title'];
    ?>
</h3><br>
<br>

<!--date de création de l'article-->
<h6 class="text-center">
    <?php
        $date = $pdo->query('SELECT created_at FROM article');
        $date = $date->fetch();
            echo $date['created_at'];
    ?>
</h6>

<!--TODO Ajouter champ pour afficher la date de mise à jour de l'article-->
    <?php
        $update = $pdo->query('SELECT updated_at FROM article');
        $update = $update->fetch();
            echo $update['updated_at'];
    ?>


<!--Image d'illustration-->
<div class="d-flex justify-content-center">

    <img src=
        <?php 
            $image = $pdo->query('SELECT image FROM article');
            $image= $image->fetch();
                echo $image['image'];
        ?> 
        class="align-content-center" alt="femme en tenue de sport qui pratique la marche" width="50%">
</div>

<!--Ajouter un champ html autour du php
pour le contenu de l'article. J'ai déjà entré du lorem ipsum dans la BDD sous le nom 'content'-->

    <?php
        $content = $pdo->query('SELECT content FROM article');
        $content = $content->fetch();
            echo $content['content'];
    ?>

<!--appelle le footer-->
<?php require('footer.php'); ?>

</body>

</html>