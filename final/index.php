<?php 
    $page_title = "Home";
    include_once "header.php";
    include_once "includes/search.php";
    
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
            echo "<p id='no-recipe'>There is currently no recipe in the database.</p>";
        }
    ?>
</main>
<?php 
    include_once "footer.php";
?>