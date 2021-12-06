<?php 
    $page_title = "Search Result";
    include_once "header.php";

    if (strlen($_GET['keyword']) == 0) {
        echo "<script> window.location = 'index.php'; </script>";
    } else {
        $keyword = $_GET['keyword'];
        $query = 'SELECT * ';
        $query .= 'FROM recipes ';
        $query .= ' WHERE ';
        $query .= "title LIKE '%" . $keyword . "%'";

        $result = mysqli_query($db_connection, $query);
        if ($result && $result->num_rows > 0) {
            $results = $result;
        } else {
            $results = null;
        }
    }
?>
<main>
    <div id="recipe-header">
        <h2>Search results for <?php echo $_GET['keyword'] ?></h2>
        <a href="create.php" id="create-button" class="admin-button">Add new recipe</a>
    </div>

    <?php
        //Check if the results return anything
        if($results && $results->num_rows >0){
            include "includes/recipe-listing.php";
        }
        else{
            echo "<p id='no-recipe'>There is currently no such recipe in the database.</p>";
        }
    ?>
</main>
<?php 
    include_once "footer.php";
?>