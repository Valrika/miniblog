<?php

//Page qui récupère tous les articles publiés et insérés dans la base de données pour les afficher dans l'ordre antichronologique

//TODO modifier ID_catégory pour mettre à la place le name de la catégorie (select juste sur un index ?)
//Afficher un nombre d'articles maximum par page ?

require('blog.php');
//

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


<body>

    <?php
        require('header.php');
    ?>

    <br>
    <br>

    <?php

    //afficher un nombre d'article maximum par page ?


        $all_articles = $pdo->query('SELECT * FROM article ORDER BY created_at DESC');
        $display_articles = $all_articles->fetchAll();


        //boucle for qui affiche tous les articles avec titre, auteur, date de création, date de modification, image, contenu

        foreach ($display_articles as $item)

            {
    ?>

                <!--titre de la catégorie-->
                <h6 class="text-center">
                    <?php echo $item['ID_category'];?> 
                </h6>

                <!--titre de l'article-->
                <h3 class="text-center">
                    <?php echo $item['title'];?>
                </h3><br>


                <!--TODO Ajouter un champ avec le nom de l'auteur-->
                <?php echo $item['author_name'];?>

                <!--date de création de l'article-->
                <h6 class="text-center">
                    <?php echo $item['created_at'];?>
                </h6>

                <!--TODO Ajouter champ pour afficher la date de mise à jour de l'article-->
                <?php echo $item['updated_at'];?>

        
                <!--Image d'illustration-->
                <div class="d-flex justify-content-center">
                    <img src=
                        <?php echo $item['image'];?>
                    class="align-content-center" alt="femme en tenue de sport qui pratique la marche" width="50%">
                </div>

                <!--TODO Ajouter un champ html pour le contenu de l'article. J'ai déjà entré du lorem ipsum dans la BDD sous le nom 'content'-->
                <?php echo $item['content'];?>
    
            <?php
            }
            ?>

    <br>

    <!--appelle le footer-->
    <?php require('footer.php'); ?>

</body>

</html>