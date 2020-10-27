<?php 

//page pour créer un article

//récupérer le contenu du titre et le stocker dans la BDD
//récupérer la date et le stocker dans la BDD
//récupérer le contenu de l'article et le stocker dans la BDD
//nom prénom date catégorie rédiger + envoyer

//echo "article bien envoyé"

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

<form>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nom de l'auteur">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Titre de l'article">
        </div>
    </div>
</form>

<div class="col-md-3 mb-3">
    <label for="validationCustom04">Catégories</label>
    <select class="custom-select" id="validationCustom04" required>
        <option selected disabled value="">Choisir...</option>
        <option>Sport</option>
        <option>Nutrition</option>
        <option>Mompreneuse</option>
    </select>
    <div class="invalid-feedback">
        Please select a valid state.
    </div>
</div>
<div class="col-md-3 mb-3">
    <label for="validationCustom05">Date</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
        Please provide a valid zip.
    </div>
</div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<footer>

</footer>

</body>

</html>
