<html lang="fr">
    <head>
        <title>Beaute O Naturel</title>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--css bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
    </head>
<body>
<header>

    <header>
        <div class="navbar-header"></div>
        <div class="navbar-collapse">
            <div class="d-flex justify-content-center">

                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="home.php">Accueil</a>
                    <a class="navbar-brand" href="articles.php">Articles</a>
                    <a class="navbar-brand" href="footer.php">A Propos</a>
                    <a class="navbar-brand" href="create_article.php">Créer un article</a>
                </nav>
            </div>

        </div>

</header>



<?php
$pdo = new PDO('mysql:host=mysql;dbname=miniblog;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

function slugify($string, $delimiter = '-') 
    {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }

?>

