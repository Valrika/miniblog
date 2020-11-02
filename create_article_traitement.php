<?php

require('header.php');

//page de traitement des articles postés


if (empty($_POST['author_name']) || empty($_POST['title']) || empty($_POST['ID_category']) || empty($_POST['created_at']) || empty($_POST['content']))

    {
        echo "Veuillez renseigner tous les champs avant de poster";
    }
    
    else
    {
        $author = $_POST["author_name"];
        $title = $_POST["title"];
        $category = $_POST["ID_category"];
        $date = $_POST["created_at"];
        $content = $_POST["content"];
        
        
        $sql = "INSERT INTO article (author_name, title, ID_category, created_at, content) VALUES ('$author', '$title', '$category', '$date', '$content')";

        $pdo->exec($sql);

    }

    
    require('footer.html');

?>