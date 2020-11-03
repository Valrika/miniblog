<?php

//page pour créer un article
//message bien envoyé une fois posté

require('header.php');

?>
<html lang="fr">
<body>
<div class="titre">
<h2 class="display-4">CREER VOTRE ARTICLE</h2>
</div>

<form action="create_article_traitement.php" method="POST" class="mt-5">

    <!--mise en place du formulaire avec colonnes bootstrap-->
    <div class="form-row">

        <!-- nom de l'auteur-->
        <div class="form-group col-md-6">
            <label>Auteur</label>
            <input type="text" class="form-control" id="author" name="author_name" placeholder="Nom de l'auteur">
        </div>

        <!-- Titre de l'article-->
        <div class="form-group col-md-6">
            <label>Titre de l'article</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titre">
        </div>

        <!--Catégorie de l'article sur une boucle-->

        <?php $category_list = $pdo->query("SELECT * FROM category")->fetchAll();
        ?>

        <div class="form-group col-md-12 mt-2">
            <label>Catégories</label>
            <select class="custom-select" required name="ID_category">
            <option selected disabled value="">Catégorie</option>

        <!--commencer boucle qui attribue chaque item de $category_list à une variable -->
        
        <?php foreach($category_list as $item): ?>    
            
            
            <!-- afficher tag option avec comme value l'id et comme contenu la category_name -->

            <option value="
                <?php 
                    echo $item["ID"];
                ?>
            ">
            
                <?php 
                    echo $item ["category_name"];
                ?>
            </option>
            
            <!-- terminer boucle -->

            <?php endforeach ?>

            </select>
        </div>


        <!--Date de création-->
        <div class="form-group col-md-6">
            <label>Date</label>
            <input type="text" class="form-control" name="created_at" placeholder="AAAA/MM/JJ">
        </div>
        
        <!--TODO champ image-->

        <!--TODO champ alternative-->


        <!--Contenu de l'article-->
        <div class="form-group col-md-6">
            <label>Texte de votre article</label>
            <textarea class="form-control" id="content" name="content" rows="15"></textarea>
        </div>

        <!--Envoi-->
        <div class="form-group col-md-12" style="text-align: center">
            <button type="submit" class="btn">Envoyer</button>
        </div>

    </div>
</form>

<?php

    require('footer.html');

?>

</body>
</html>