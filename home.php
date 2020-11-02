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
    <!-- Fontawesome -->

    <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
</head>


<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">ACCUEIL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="articles.php">ARTICLES<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Sport</a>
                        <a class="dropdown-item" href="#">Nutrition</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mompreneuse</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">A PROPOS<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connectez-vous</button>
            </form>
        </div>
    </nav>
    </header>


<!-- insertion de la bannière -->
    <div class="banniere">
        <img src="images/banniere.png" class="img-fluid" alt="responsive image">
    </div>

<br>
<br>
<br>

<!-- Page wrapper -->
<div class="page-wrapper">

    <!-- Post slider -->
    <div class="post-slider">
        <h1 class="slider-title display-4">Articles à la une</h1>
        <i class="fa fa-chevron-left prev"></i>
        <i class="fa fa-chevron-right next"></i>
<br>
        <br>

        <div class="post-wrapper">

            <div class="post">
                <img src="images/marche.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h5><a href="articles.php">Les bienfaits de la marche à pieds</a></h5>
                    <i class="fa fa-user">Valérie EKOUME</i>
                    &nbsp;
                    <i class="fa fa-calendar">Lundi 26 octobre</i>
                </div>
            </div>

            <div class="post">
                <img src="images/workingmom2.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h5><a href="articles.php">Maman à temps plein</a></h5>
                    <i class="fa fa-user">Marika VALMALETTE</i>
                    &nbsp;
                    <i class="fa fa-calendar">Lundi 26 octobre</i>
                </div>
            </div>

            <div class="post">
                <img src="images/bananas.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h5><a href="articles.php">Bananas !</a></h5>
                    <i class="fa fa-user">Marika VALMALETTE</i>
                    &nbsp;
                    <i class="fa fa-calendar">Lundi 26 octobre</i>
                </div>
            </div>

            <div class="post">
                <img src="images/piedsnus.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h5><a href="articles.php">Famille MonoParentale</a></h5>
                    <i class="fa fa-user">Valérie EKOUME</i>
                    &nbsp;
                    <i class="fa fa-calendar">Lundi 26 octobre</i>
                </div>
            </div>

            <div class="post">
                <img src="images/drink.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h5><a href="articles.php">Besoin d'une pose?</a></h5>
                    <i class="fa fa-user">Valérie EKOUME</i>
                    &nbsp;
                    <i class="fa fa-calendar">Lundi 26 octobre</i>
                </div>
            </div>

        </div>

    </div>


    <!-- Post slider -->


</div>
<!-- Page wrapper -->

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!--Slick carroussel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom script -->
<script src="js/scripts.js"></script>
<br>
        <br>
<br>
<br>


<!-- Footer à 4 colones-->
<footer class="bottom">

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
                    <h2>CATEGORIES</h2>
                    <ul>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Nutrition</a></li>
                        <li><a href="#">Mompreneuse</a></li>
                    </ul>
                </div>

                <!-- colonne 3 MEDIA SOCIAUX-->

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

        <p class="footer-bottom-text">All Right reserved by &copy;BelleONaturel.2019<p>

        </footer>
</body>

</html>
