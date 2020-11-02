<?php

//Page qui récupère tous les articles publiés et insérés dans la base de données pour les afficher dans l'ordre antichronologique

//TODO modifier ID_catégory pour mettre à la place le name de la catégorie (select juste sur un index ?)
//Afficher un nombre d'articles maximum par page ?

//

?>


        <?php require('header.php'); ?>


    

    <?php

    //afficher un nombre d'article maximum par page ?

        //appelle la table article et range les articles dans l'ordre antichronologique en joignant la table category à l'entrée category_ID
        //donner explicitement les noms de champs qu'on veut
        //article.* = permet d'éviter d'aller chercher le slug dans la table category
        $all_articles = $pdo->query("SELECT article.*, category.category_name FROM article LEFT JOIN category ON article.ID_category = category.ID ORDER BY article.created_at DESC");
        $display_articles = $all_articles->fetchAll();

        //boucle for qui affiche tous les articles avec nom de la catégorie, titre, auteur, date de création, date de modification, image, contenu

        foreach ($display_articles as $item)

            {var_dump($item);
    ?>

                <!--titre de la catégorie-->
                <!--je veux appeler la catégorie associée à chaque article
                    catégorie qui se trouve dans une table différente : category
                    mais associée à ID_category dans la table article-->
                <h6 class="text-center">
                    <?php
                    echo $item['category_name'];
                    ?>
                </h6>
                
                <!--RELIRE!!!-->
                <!--titre de l'article-->
                <h3 class="text-center">
                    <!--Lien vers la page pour afficher l'article tout seul en passant par le slug-->
                    <a href="display_article.php?slug=<?php echo $item['slug']; ?>">
                        <?php echo $item['title'];?>
                    </a>
                    
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

    <?php require('footer.html'); ?>


</body>

</html>