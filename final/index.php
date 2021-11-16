<?php 
    $page_title = "Home";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/includes/search.php";
    
    //Build query
    $query = "SELECT *";
    $query .= "FROM recipes";
    $results = mysqli_query($db_connection, $query);
?>
<main>
    <h2>All recipes</h2>
    
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