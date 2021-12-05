<?php
    $page_title = "Delete Recipe";
    include_once "header.php";
    
    if (isset($_GET['id'])) {
        $recipe_id = $_GET['id'];

        // Build Query
        $query = "DELETE FROM `recipes` WHERE `recipes`.`id` = '{$recipe_id}' LIMIT 1";

        $results = mysqli_query($db_connection, $query);
        if ($results) {
            echo "<script> window.location = 'index.php';</script>";
        } else {
            echo "<script> window.location = 'index.php?error';</script>";
        }
    } else {
        // Redirect user if no ID is passed in URL
        echo "<script> window.location = 'index.php';</script>";
    }
?>

<?php 
    include_once "footer.php";
?>