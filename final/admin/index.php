<?php 
    $page_title = "Admin Home";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/includes/search.php";
    
    //Build query
    $query = "SELECT *";
    $query .= "FROM recipes";
    $results = mysqli_query($db_connection, $query);

?>
<main>
    <div id="recipe-header">
        <h2>All recipes</h2>
        <button id="create-recipe-button" class="admin-button">Add new recipe</button>
    </div>

    <?php
        //Check if the results return anything
        if($results && $results->num_rows >0){
            include $_SERVER["DOCUMENT_ROOT"] . "/includes/recipe-listing.php";
        }
        else{
            echo "There are currently no recipe in the database";
        }
    ?>
</main>
<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/footer.php";
?>
<script>
    let createRecipeButton = document.getElementById("create-recipe-button");
    createRecipeButton.addEventListener("click", function(){
        window.location.href='create.php';
    });
</script>