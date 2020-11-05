<?php

//page pour afficher une catégorie ainsi que tous les articles postés dedans
//sur chaque article un lien vers la page de l'article tout seul

require('header.php');

$slug = $_GET["slug"];

//sélectionne tout dans la table article où l'ID de la catégorie est égal à l'ID de la table category dont le slug correspond au slug envoyé
$articles_query = $pdo->query("SELECT article.* FROM article LEFT JOIN category ON article.ID_category = category.category_ID WHERE category.slug='$slug'");
$article = $articles_query->fetchAll();


//affiche chaque article de la catégorie demandée

foreach ($article as $item)

            {
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


                <!--nom de l'auteur-->
                <h6 class="text-center">
                <?php echo $item['author_name'];?>
                </h6>

                <!--date de création de l'article-->
                <h6 class="text-center"> Ecrit le :
                    <?php echo $item['created_at'];?>
                </h6>

                <!--date de mise à jour de l'article-->
                <h6 class="text-center">Mis à jour le :
                <?php echo $item['updated_at'];?>
                </h6>

                <!--Image d'illustration-->
                <div class="d-flex justify-content-center">
                    <img src=<?php echo $item['image'];?>

                         class="align-content-center" alt="femme en tenue de sport qui pratique la marche" width="50%">
                </div>
                
            <?php
            }
            ?>


</body>

<?php require('footer.html');?>

</html>