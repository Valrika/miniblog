

<html lang="fr">
    <head>
        <title>Beaute O Naturel</title>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--css bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
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
<a class="nav-link" href="create_article.php">CREER UN ARTICLE<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
<a class="nav-link" href="#">A PROPOS<span class="sr-only">(current)</span></a>
</li>

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
                    <a class="nav-link" href="create_article.php">CREER UN ARTICLE<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">A PROPOS<span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>
</header>



<?php
$pdo = new PDO('mysql:host=mysql;dbname=miniblog;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

function slugify($string, $delimiter = '-')
    {
        $re = '/(\?\!\'\")*/';
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace($re, $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }

?>

