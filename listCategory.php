<?php

//Page qui affiche tous les articles d'une catégorie sélectionnée dans le menu déroulant 
//ou dans la page avec tous les articles
//en s'affichant par son slug ?
require('header.php');



$all_categories = $pdo->query("SELECT category.* FROM category");
$display_categories = $all_categories->fetchAll();


foreach ($display_categories as $item)

        {
?>

    <h6 class="text-center">
        <a href="displayCategory.php?">
            <?php echo $item['category_name'];?>  
        </a>   
    </h6>

<?php
        }


require('footer.html');
 
?>

</body>

</html>