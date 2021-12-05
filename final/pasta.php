<?php 
    $page_title = "Pasta";
    include_once "header.php";
    include_once "includes/search.php";
    
    //Build query
    $query = "SELECT * FROM `recipes` WHERE category_id = 1 ";
    $results = mysqli_query($db_connection, $query);

?>
<main>
    <div id="recipe-header">
        <h2>Pasta recipes</h2>
        <a href="create.php" id="create-button" class="admin-button">Add new recipe</a>
    </div>

    <?php
        //Check if the results return anything
        if($results && $results->num_rows >0){
            include "includes/recipe-listing.php";
        }
        else{
            echo "<p id='no-recipe'>There is currently no pasta recipe in the database.</p>";
        }
    ?>
</main>
<?php 
    include_once "footer.php";
?>