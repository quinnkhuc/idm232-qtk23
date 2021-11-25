<?php 
    $page_title = "Home";
    include_once "header.php";
    
    //Build query
    $query = "SELECT *";
    $query .= "FROM recipes";
    $results = mysqli_query($db_connection, $query);

?>
<main>
    <div id="recipe-header">
        <h2>All recipes</h2>
        <a href="create.php" id="create-button" class="admin-button">Add new recipe</a>
    </div>

    <?php
        //Check if the results return anything
        if($results && $results->num_rows >0){
            include "includes/recipe-listing.php";
        }
        else{
            echo "There are currently no recipe in the database";
        }
    ?>
</main>
<?php 
    include_once "footer.php";
?>