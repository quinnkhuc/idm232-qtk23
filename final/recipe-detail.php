<?php 
    $page_title = "Recipe";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/header.php";

    if(isset($_GET["id"])){
        $recipe_id = $_GET["id"];

        //Build query
        $query = "SELECT * FROM recipes WHERE id=" . $_GET["id"];
        $results = mysqli_query($db_connection, $query);
        

        if($results && $results->num_rows > 0){
            $recipe = $row = mysqli_fetch_assoc($results);
        } else {
            echo mysqli_error($db_connection);
        }

    } else {
        //Redirect user if no id is passed in URL
        redirectTo("/index.php");
    }

?>

<main>
    <div id="recipe-header">
        <div>
            <h2><?php echo $recipe["title"] ?></h2>
        </div>
    </div>
    <div id="recipe-content">
        <p id="description"><?php echo $recipe["description"] ?></p>
        <div class="recipe-step">
            <img srcset="images/ancho-orange-chicken/ingredients-large.jpg 800w,
                            images/ancho-orange-chicken/ingredients-medium.jpg 500w,
                            images/ancho-orange-chicken/ingredients-small.jpg 250w"
                 sizes="(min-width: 900px) 30vw, 80vw"
                 src="images/ancho-orange-chicken/ingredients-small.jpg"
                 alt="Ingredients"/>
            <div>
                <h3>Ingredients</h3>
                <p><?php echo $recipe["ingredients_description"] ?></p>
            </div>
        </div>
        
        <div class="recipe-step">
            <img srcset="images/ancho-orange-chicken/step1-large.jpg 800w,
                            images/ancho-orange-chicken/step1-medium.jpg 500w,
                            images/ancho-orange-chicken/step1-small.jpg 250w"
                 sizes="(min-width: 900px) 30vw, 80vw"
                 src="images/ancho-orange-chicken/step1-small.jpg"
                 alt="Step 1"/>
            <div>
                <h3>Step 1</h3>
                <p><?php echo $recipe["step_1_description"] ?></p>
            </div>
        </div>

        <?php if($recipe["step_2_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 2"/>
                <div>
                    <h3>Step 2</h3>
                    <p><?php echo $recipe["step_2_description"] ?></p>
                </div>
            </div>
        <?php } ?>
        
        <?php if($recipe["step_3_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 3"/>
                <div>
                    <h3>Step 3</h3>
                    <p><?php echo $recipe["step_3_description"] ?></p>
                </div>
            </div>
        <?php } ?>

        <?php if($recipe["step_4_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 4"/>
                <div>
                    <h3>Step 4</h3>
                    <p><?php echo $recipe["step_4_description"] ?></p>
                </div>
            </div>
        <?php } ?>

        <?php if($recipe["step_5_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 5"/>
                <div>
                    <h3>Step 5</h3>
                    <p><?php echo $recipe["step_5_description"] ?></p>
                </div>
            </div>
        <?php } ?>
        
        <?php if($recipe["step_6_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 6"/>
                <div>
                    <h3>Step 6</h3>
                    <p><?php echo $recipe["step_6_description"] ?></p>
                </div>
            </div>
        <?php } ?>

        <?php if($recipe["step_7_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 7"/>
                <div>
                    <h3>Step 7</h3>
                    <p><?php echo $recipe["step_7_description"] ?></p>
                </div>
            </div>
        <?php } ?>

        <?php if($recipe["step_8_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 8"/>
                <div>
                    <h3>Step 8</h3>
                    <p><?php echo $recipe["step_8_description"] ?></p>
                </div>
            </div>
        <?php } ?>

        <?php if($recipe["step_9_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 9"/>
                <div>
                    <h3>Step 9</h3>
                    <p><?php echo $recipe["step_9_description"] ?></p>
                </div>
            </div>
        <?php } ?>

        <?php if($recipe["step_10_description"]){ ?>
            <div class="recipe-step">
                <img srcset="images/ancho-orange-chicken/step6-large.jpg 800w,
                                images/ancho-orange-chicken/step6-medium.jpg 500w,
                                images/ancho-orange-chicken/step6-small.jpg 250w"
                    sizes="(min-width: 900px) 30vw, 80vw"
                    src="images/ancho-orange-chicken/step6-small.jpg"
                    alt="Step 10"/>
                <div>
                    <h3>Step 10</h3>
                    <p><?php echo $recipe["step_10_description"] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</main>
<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/footer.php";
?>