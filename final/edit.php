<?php 
    $page_title = "Edit";
    include_once "header.php";
    
    //Form has been submitted
    if(isset($_POST["submit"])){
        $recipe_id = $_POST['recipe_id'];

        // Make sure GET ID == post ID
        if ($_GET['id'] != $recipe_id) {
            redirectTo('edit.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
        }

        $title = mysqli_real_escape_string($db_connection, $_POST['title']);
        
        $description = mysqli_real_escape_string($db_connection, $_POST['description']);
    
        $ingredients_description = mysqli_real_escape_string($db_connection, $_POST['ingredients_description']);

        $step_1_description = mysqli_real_escape_string($db_connection, $_POST['step_1_description']);

        $step_2_description = mysqli_real_escape_string($db_connection, $_POST['step_2_description']);

        $step_3_description = mysqli_real_escape_string($db_connection, $_POST['step_3_description']);

        $step_4_description = mysqli_real_escape_string($db_connection, $_POST['step_4_description']);

        $step_5_description = mysqli_real_escape_string($db_connection, $_POST['step_5_description']);

        $step_6_description = mysqli_real_escape_string($db_connection, $_POST['step_6_description']);

        $step_7_description = mysqli_real_escape_string($db_connection, $_POST['step_7_description']);

        $step_8_description = mysqli_real_escape_string($db_connection, $_POST['step_8_description']);

        $step_9_description = mysqli_real_escape_string($db_connection, $_POST['step_9_description']);

        $step_10_description = mysqli_real_escape_string($db_connection, $_POST['step_10_description']);
        
        $current_date = getFormattedDateTime();

        if($_FILES['featured_photo']['tmp_name'] != ""){
            //Upload featured image
            // Parse Data
            $img_name = slugify($_FILES['featured_photo']['name']);
            $temp_name = $_FILES['featured_photo']['tmp_name'];

            // distribution/upload-images/image-name.png
            $img_src = $app['asset_url'] . $img_name;
            $img_destination = $_SERVER['DOCUMENT_ROOT'] . $img_src;

            $current_date = getFormattedDateTime();

            // Build Query
            $query = 'INSERT INTO images (img_src, img_title, date_created)';
            $query .= "VALUES ('{$img_src}', '{$img_name}', '{$current_date}')";
        
            // Execute Query
            $db_results = mysqli_query($db_connection, $query);
            $new_uploaded_img_id = null;

            if ($db_results) {
                // file was inserted into the db
                if (move_uploaded_file($temp_name,  $img_destination)) {
                    // File was uploaded successfully

                    // Build Query to get the recently uploaded image and get that ID
                    $query = 'SELECT * ';
                    $query .= 'FROM images ';
                    $query .= "WHERE img_src='{$img_src}'";
        
                    $db_results = mysqli_query($db_connection, $query);

                    if ($db_results) {
                        // Get row from results and assign to $user variable;
                        $new_uploaded_img_id = mysqli_fetch_assoc($db_results)['id'];
                    } else {
                        redirectTo('edit.php?error=Could not find image in database');
                    }
                } else {
                    redirectTo('edit.php?error=Error moving file');
                }
            } else {
                // Error
                redirectTo('edit.php?error=' . mysqli_error($db_connection));
            }

            $featured_photo = (float)$new_uploaded_img_id;

            //Build query
            $query = "UPDATE `recipes` SET `featured_photo` = '{$featured_photo}', `title` = '{$title}', `description` = '{$description}', `ingredients_description` = '{$ingredients_description}', `step_1_description` = '{$step_1_description}', `step_2_description` = '{$step_2_description}', `step_3_description` = '{$step_3_description}', `step_4_description` = '{$step_4_description}', `step_5_description` = '{$step_5_description}', `step_6_description` = '{$step_6_description}', `step_7_description` = '{$step_7_description}', `step_8_description` = '{$step_8_description}', `step_9_description` = '{$step_9_description}', `step_10_description` = '{$step_10_description}', `date_updated` = '{$current_date}' WHERE `recipes`.`id` = $recipe_id"; 

            //Execute query
            $db_results = mysqli_query($db_connection, $query);
            if ($db_results) {
                // Success
                redirectTo('index.php');
            } else {
                // Error
                redirectTo('edit.php?error=' . mysqli_error($db_connection));
            }
        } else {
            //Build query
            $query = "UPDATE `recipes` SET `title` = '{$title}', `description` = '{$description}', `ingredients_description` = '{$ingredients_description}', `step_1_description` = '{$step_1_description}', `step_2_description` = '{$step_2_description}', `step_3_description` = '{$step_3_description}', `step_4_description` = '{$step_4_description}', `step_5_description` = '{$step_5_description}', `step_6_description` = '{$step_6_description}', `step_7_description` = '{$step_7_description}', `step_8_description` = '{$step_8_description}', `step_9_description` = '{$step_9_description}', `step_10_description` = '{$step_10_description}', `date_updated` = '{$current_date}' WHERE `recipes`.`id` = $recipe_id"; 

            //Execute query
            $db_results = mysqli_query($db_connection, $query);
            if ($db_results) {
                // Success
                redirectTo('index.php');
            } else {
                // Error
                redirectTo('edit.php?error=' . mysqli_error($db_connection));
            }
        }

    } elseif (isset($_GET['id'])) {
        $recipe_id = $_GET['id'];
        // Build Query
        $query = "SELECT * FROM recipes WHERE id=" . $_GET["id"];
        $results = mysqli_query($db_connection, $query);
    
        if ($results && $results->num_rows > 0) {
            $recipe = $row = mysqli_fetch_assoc($results);
        } else {
            // Redirect user if ID does not have a match in the DB
            redirectTo('index.php');
        }
    } else {
        // Redirect user if no ID is passed in URL
        redirectTo('index.php');
    }
?>
<main>
    <h2>Edit</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="title">Recipe Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $recipe["title"]; ?>">

        <label for="featured_photo" id="featured_photo_label">Featured Photo:</label>
        <input type="file" name="featured_photo" id="featured_photo" class="file_input">

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="8" cols="100"><?php echo $recipe["description"]; ?></textarea>

        <label for="ingredients_description">Ingredients Description:</label>
        <textarea name="ingredients_description" id="ingredients_description" rows="8" cols="100"><?php echo $recipe["ingredients_description"]; ?></textarea>

        <label for="step_1_description">Step 1 Description:</label>
        <textarea name="step_1_description" id="step_1_description" rows="8" cols="100"><?php echo $recipe["step_1_description"]; ?></textarea>

        <label for="step_2_description">Step 2 Description:</label>
        <textarea name="step_2_description" id="step_2_description" rows="8" cols="100"><?php echo $recipe["step_2_description"]; ?></textarea>

        <label for="step_3_description">Step 3 Description:</label>
        <textarea name="step_3_description" id="step_3_description" rows="8" cols="100"><?php echo $recipe["step_3_description"]; ?></textarea>

        <label for="step_4_description">Step 4 Description:</label>
        <textarea name="step_4_description" id="step_4_description" rows="8" cols="100"><?php echo $recipe["step_4_description"]; ?></textarea>

        <label for="step_5_description">Step 5 Description:</label>
        <textarea name="step_5_description" id="step_5_description" rows="8" cols="100"><?php echo $recipe["step_5_description"]; ?></textarea>

        <label for="step_6_description">Step 6 Description:</label>
        <textarea name="step_6_description" id="step_6_description" rows="8" cols="100"><?php echo $recipe["step_6_description"]; ?></textarea>

        <label for="step_7_description">Step 7 Description:</label>
        <textarea name="step_7_description" id="step_7_description" rows="8" cols="100"><?php echo $recipe["step_7_description"]; ?></textarea>

        <label for="step_8_description">Step 8 Description:</label>
        <textarea name="step_8_description" id="step_8_description" rows="8" cols="100"><?php echo $recipe["step_8_description"]; ?></textarea>

        <label for="step_9_description">Step 9 Description:</label>
        <textarea name="step_9_description" id="step_9_description" rows="8" cols="100"><?php echo $recipe["step_9_description"]; ?></textarea>

        <label for="step_10_description">Step 10 Description:</label>
        <textarea name="step_10_description" id="step_10_description" rows="8" cols="100"><?php echo $recipe["step_10_description"]; ?></textarea>

        <input type="hidden" value="<?php echo $recipe["id"]; ?>" name="recipe_id">

        <input type="submit" name="submit" value="Edit" class="button">
    </form>
    
</main>
<?php 
    include "includes/alert.php";
    include_once "footer.php";
?>