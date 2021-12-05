<?php 
    $page_title = "Add A New Recipe";
    include_once "header.php";
    
    //Form has been submitted
    if(isset($_POST["submit"])){
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
                    echo "<script> window.location = 'create.php?error=Could not find image in database';</script>";
                }
            } else {
                echo "<script> window.location = 'create.php?error=Error moving file';</script>";
            }
        } else {
            // Error
            echo "<script> window.location = 'create.php?error';</script>";
        }

        //Continue submitting the rest of the form
        //Parse data
        $title = mysqli_real_escape_string($db_connection, $_POST['title']);

        $featured_photo = (float)$new_uploaded_img_id;

        $category_id = (int)mysqli_real_escape_string($db_connection, $_POST['category']);
        
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

        //Build query
        $query = "INSERT INTO `recipes` (`id`, `featured_photo`, `category_id`, `title`, `description`,`ingredients_description`, `step_1_description`, `step_2_description`, `step_3_description`, `step_4_description`, `step_5_description`, `step_6_description`, `step_7_description`, `step_8_description`, `step_9_description`, `step_10_description`, `date_created`, `date_updated`) VALUES (NULL, '{$featured_photo}', '{$category_id}', '{$title}', '{$description}', '{$ingredients_description}', '{$step_1_description}', '{$step_2_description}', '{$step_3_description}', '{$step_4_description}', '{$step_5_description}', '{$step_6_description}', '{$step_7_description}', '{$step_8_description}', '{$step_9_description}', '{$step_10_description}', '{$current_date}', '{$current_date}')";

        //Execute query
        $db_results = mysqli_query($db_connection, $query);
        if ($db_results) {
            // Success
            echo "<script> window.location = 'index.php';</script>";
        } else {
            // Error
            echo "<script> window.location = 'create.php?error';</script>";
        }

    }
?>
<main>
    <h2>Add A New Recipe</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <label for="featured_photo" id="featured_photo_label">Featured Photo:</label>
        <input type="file" name="featured_photo" id="featured_photo" class="file_input">

        <label for="category" id="category_label">Category:</label>
        <div class="category_option">
            <input type="radio" id="pasta" name="category" value="1" class="radio_input">
            <label for="pasta" class="radio_label">Pasta</label>
        </div>
        <div class="category_option">
            <input type="radio" id="meat" name="category" value="2" class="radio_input">
            <label for="meat" class="radio_label">Meat</label>
        </div>
        <div class="category_option">
            <input type="radio" id="seafood" name="category" value="3" class="radio_input">
            <label for="seafood" class="radio_label">Seafood</label>
        </div>
        <div class="category_option">
            <input type="radio" id="vegetarian" name="category" value="4" class="radio_input">
            <label for="vegetarian" class="radio_label">Vegetarian</label>
        </div>
        <div class="category_option">
            <input type="radio" id="dessert" name="category" value="5" class="radio_input">
            <label for="dessert" class="radio_label">Dessert</label>
        </div>
        
        <label for="description" id="description_label">Description:</label>
        <textarea name="description" id="description" rows="8" cols="100"></textarea>

        <label for="ingredients_description">Ingredients Description:</label>
        <textarea name="ingredients_description" id="ingredients_description" rows="8" cols="100"></textarea>

        <label for="step_1_description">Step 1 Description:</label>
        <textarea name="step_1_description" id="step_1_description" rows="8" cols="100"></textarea>

        <label for="step_2_description">Step 2 Description:</label>
        <textarea name="step_2_description" id="step_2_description" rows="8" cols="100"></textarea>

        <label for="step_3_description">Step 3 Description:</label>
        <textarea name="step_3_description" id="step_3_description" rows="8" cols="100"></textarea>

        <label for="step_4_description">Step 4 Description:</label>
        <textarea name="step_4_description" id="step_4_description" rows="8" cols="100"></textarea>

        <label for="step_5_description">Step 5 Description:</label>
        <textarea name="step_5_description" id="step_5_description" rows="8" cols="100"></textarea>

        <label for="step_6_description">Step 6 Description:</label>
        <textarea name="step_6_description" id="step_6_description" rows="8" cols="100"></textarea>

        <label for="step_7_description">Step 7 Description:</label>
        <textarea name="step_7_description" id="step_7_description" rows="8" cols="100"></textarea>

        <label for="step_8_description">Step 8 Description:</label>
        <textarea name="step_8_description" id="step_8_description" rows="8" cols="100"></textarea>

        <label for="step_9_description">Step 9 Description:</label>
        <textarea name="step_9_description" id="step_9_description" rows="8" cols="100"></textarea>

        <label for="step_10_description">Step 10 Description:</label>
        <textarea name="step_10_description" id="step_10_description" rows="8" cols="100"></textarea>

        <input type="submit" name="submit" value="Add New Recipe" class="button">
    </form>
    
</main>
<?php 
    include "includes/alert.php";
    include_once "footer.php";
?>