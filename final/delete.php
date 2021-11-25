<?php
    $page_title = "Delete Recipe";
    include_once "header.php";
    
    if (isset($_GET['id'])) {
        $recipe_id = $_GET['id'];

        // Build Query
        $query = "DELETE FROM `recipes` WHERE `recipes`.`id` = '{$recipe_id}' LIMIT 1";

        $results = mysqli_query($db_connection, $query);
        if ($results) {
            redirectTo('index.php?success=Recipe was deleted');
        } else {
            redirectTo('index.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
        }
    } else {
        // Redirect user if no ID is passed in URL
        redirectTo('index.php');
    }
?>

<?php 
    include_once "footer.php";
?>