<?php
//page pour créer un article

//récupérer le contenu du titre et le stocker dans la BDD
//récupérer la date et le stocker dans la BDD
//récupérer le contenu de l'article et le stocker dans la BDD
//nom prénom date catégorie rédiger + envoyer

//rediriger vers une page "article bien envoyé"

//name = "article"



?>
<html lang="fr">
<head>
    <title>Beaute O Naturel</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="titre">
    <h1 class="display-4 mb-5">CREEZ VOTRE ARTICLE</h1>
</div>

<form class="mt-5">
    <!--mise en place du formulaire avec   colonnes bootstrap-->
    <div class="form-row">

        <!-- nom de l'auteur-->
        <div class="form-group col-md-6">
            <label>Nom de l'auteur</label>
            <input type="text" class="form-control">
        </div>

        <!-- Titre de l'article-->
        <div class="form-group col-md-6">
            <label>Titre article</label>
            <input type="text" class="form-control" placeholder="Titre article">
        </div>


        <div class="form-group col-md-12 mt-2">
            <label>Catégories</label>
            <select class="custom-select" required>
                <option selected disabled value="">Catégorie</option>
                <option>Sport</option>
                <option>Nutrition</option>
                <option>Mompreneuse</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>Date</label>
            <input type="text" class="form-control" placeholder="Date">
        </div>

        <div class="form-group col-md-6">
            <label>Update</label>
            <input type="text" class="form-control" placeholder="Update">
        </div>

        <div class="form-group col-md-6">
            <label>Content</label>
            <textarea class="form-control" rows="15"></textarea>
        </div>

        <div class="form-group col-md-12" style="text-align: center">
            <button type="submit" class="btn">Submit</button>
        </div>

    </div>

</body>
</html>