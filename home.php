<?php 

// page d'accueil


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Beauté O Naturel</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
<!-- Barre de navigation -->
    <div class="navbar-header"></div>
    <div class="navbar-collapse">

    <div class="d-flex justify-content-center">

        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="home.php">Accueil</a>
            <a class="navbar-brand" href="articles.php">Articles</a>
            <a class="navbar-brand" href="header.php">A Propos</a>
            <a class="navbar-brand" href="create_article.php">Créer un article</a>

        </nav>
    </div>
</header>

<!-- insertion de la bannière -->
    <div class="banniere">
        <img src="images/banniere.png" class="img-fluid" alt="responsive image">
    </div>

        <br>
        <br>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, autem blanditiis consectetur consequatur cumque delectus dolorum eaque excepturi exercitationem itaque magni modi molestiae perspiciatis placeat, possimus quasi reprehenderit vero!
        </p>
<br>
        <br>

<!-- Footer à 4 colones-->

    <div class="footer-top align-content-between">
    <div class="container col-md-12">
        <div class="row">
        <div class="d-flex p-2 align-content-around">
            <div class="col-md-3 segment-one md-mb-30 md-mb-30">
                <!-- Bcolonne 1 PRESENTATION du site-->
                    <h3>Belle O Naturel</h3>
                    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
            </div>

            <!-- colonne 2 liens vers les CATEGORIES du site-->
            <div class="col-md-3 segment-two md-mb-30 md-mb-30">
                    <h2>Belle O Naturel</h2>
                    <ul>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Nutrition</a></li>
                        <li><a href="#">Mompreneuse</a></li>
                    </ul>
                </div>

                <!-- colonne 3 MEDIA SOCIAUX-->
            <
                <div class="col-md-3 segment-three md-mb-30 md-mb-30">
                    <h2>FOLLOW US</h2>
                    <p>N'hésitez pas à nous suivre sur les réseaux sociaux, que l'on puisse continuer à partager nos
                    expériences.</p>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            <!-- colonne 4 NEWSLETTER-->
                <div class="col-md-3 segment-four md-mb-30 md-mb-30">
                    <h2>NOTRE NEWSLETTER</h2>
                    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
                    <form action="">
                        <input type="email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                </div>
    </div>
    </div>
            <!-- Texte footer copyright-->
        <footer>
        <p class="footer-bottom-text">All Right reserved by &copy;BelleONaturel.2019<p>

        </footer>
</body>

</html>
