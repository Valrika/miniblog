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
        $slug = slugify($title);
        $category = $_POST["ID_category"];
        $date = $_POST["created_at"];
        $content = $_POST["content"];
        
        $sql = $pdo->prepare("INSERT INTO article (author_name, title, ID_category, slug, created_at, content) VALUES (:author_name, :title, :ID_category, :slug, :created_at, :content)");
        $sql->bindParam(':author_name', $author);
        $sql->bindParam(':title', $title);
        $sql->bindParam(':ID_category', $category);
        $sql->bindParam(':slug', $slug);
        $sql->bindParam(':created_at', $date);
        $sql->bindParam(':content', $content);

        $sql->execute();
?>

        <h6 class="text-center"> 
            <?php echo "Votre article a bien été envoyé."; ?>
        </h6><br>
    

        <h6 class="text-center">
        <a href="display_article.php?slug=<?php echo $slug; ?>">
        Admirez ici le résultat !
        </a>
        </h3><br><br>

<?php
    }

    require('footer.html');
?>