<?php 
    $page_title = "Recipe";
    include_once "header.php";

    if(isset($_GET["id"])){
        $recipe_id = $_GET["id"];

        //Build query
        $query = 'SELECT recipe.id, recipe.title, recipe.featured_photo, recipe.description, recipe.ingredients_description, recipe.step_1_description, recipe.step_2_description, recipe.step_3_description, recipe.step_4_description, recipe.step_5_description, recipe.step_6_description, recipe.step_7_description, recipe.step_8_description, recipe.step_9_description, recipe.step_10_description, image.img_src ';
        $query .= 'FROM recipes AS recipe ';
        $query .= 'INNER JOIN images AS image ';
        $query .= 'ON recipe.featured_photo = image.id ';
        $query .= 'WHERE recipe.id = ' . $recipe_id;
        
        $results = mysqli_query($db_connection, $query);
        if($results && $results->num_rows > 0){
            $recipe = $row = mysqli_fetch_assoc($results);
        } else {
            echo "<script> window.location = 'index.php?error';</script>";
        }

    } else {
        //Redirect user if no id is passed in URL
        echo "<script> window.location = 'index.php';</script>";
    }

?>

<main>
    <div id="recipe-header">
        <img src="<?php echo $recipe["img_src"]; ?>" alt="<?php echo $recipe["title"] ?> Image"/>
        <h2><?php echo $recipe["title"] ?></h2>
    </div>
    <div id="recipe-content">
        <?php echo $recipe["description"] ?>
        <div class="recipe-step">
            <h3>Ingredients</h3>
            <?php echo $recipe["ingredients_description"] ?>
        </div>
        
        <div class="recipe-step">
            <h3>Step 1</h3>
            <?php echo $recipe["step_1_description"] ?>
        </div>

        <?php if($recipe["step_2_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 2</h3>
                <?php echo $recipe["step_2_description"] ?>
            </div>
        <?php } ?>
        
        <?php if($recipe["step_3_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 3</h3>
                <?php echo $recipe["step_3_description"] ?>
            </div>
        <?php } ?>

        <?php if($recipe["step_4_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 4</h3>
                <?php echo $recipe["step_4_description"] ?>
            </div>
        <?php } ?>

        <?php if($recipe["step_5_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 5</h3>
                <?php echo $recipe["step_5_description"] ?>
            </div>
        <?php } ?>
        
        <?php if($recipe["step_6_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 6</h3>
                <?php echo $recipe["step_6_description"] ?>
            </div>
        <?php } ?>

        <?php if($recipe["step_7_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 7</h3>
                <?php echo $recipe["step_7_description"] ?>
            </div>
        <?php } ?>

        <?php if($recipe["step_8_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 8</h3>
                <?php echo $recipe["step_8_description"] ?>
            </div>
        <?php } ?>

        <?php if($recipe["step_9_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 9</h3>
                <?php echo $recipe["step_9_description"] ?>
            </div>
        <?php } ?>

        <?php if($recipe["step_10_description"]){ ?>
            <div class="recipe-step">
                <h3>Step 10</h3>
                <?php echo $recipe["step_10_description"] ?>
            </div>
        <?php } ?>
    </div>
</main>
<?php 
    include_once "footer.php";
?>