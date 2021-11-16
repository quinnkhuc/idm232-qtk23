<?php 
    $page_title = "Add A New Recipe";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/header.php";
?>
<main>
    <h2>Add A New Recipe</h2>
    <form>
        <label for="title">Title:*</label>
        <input type="text" name="title" id="title" required>

        <p id="category_label">Category:</p>
        <div class="category_option">
            <input type="radio" name="category" id="meat" value="meat" class="radio_input" checked="checked">
            <label for="meat" class="radio_label">Meat</label>
        </div>
        <div class="category_option">
            <input type="radio" name="category" id="seafood" value="seafood" class="radio_input">
            <label for="seafood" class="radio_label">Seafood</label>
        </div>
        <div class="category_option">
            <input type="radio" name="category" id="pasta" value="pasta" class="radio_input">
            <label for="pasta" class="radio_label">Pasta</label>
        </div>
        <div class="category_option">
            <input type="radio" name="category" id="vegetarian" value="vegetarian" class="radio_input">
            <label for="vegetarian" class="radio_label">Vegetarian</label>
        </div>
        <div class="category_option">
            <input type="radio" name="category" id="dessert" value="dessert" class="radio_input">
            <label for="dessert" class="radio_label">Dessert</label>
        </div>

        <label for="featured_photo" id="featured_photo_label">Featured Photo:*</label>
        <input type="file" name="featured_photo" id="featured_photo" class="file_input" required>

        <label for="description">Description:*</label>
        <textarea name="description" id="description" rows="8" cols="100" required></textarea>

        <label for="ingredients_photo">Ingredients Photo:*</label>
        <input type="file" name="ingredients_photo" id="ingredients_photo" class="file_input" required>

        <label for="ingredients_description">Ingredients Description:*</label>
        <textarea name="ingredients_description" id="ingredients_description" rows="8" cols="100" required></textarea>

        <label for="step_1_photo">Step 1 Photo:*</label>
        <input type="file" name="step_1_photo" id="step_1_photo" class="file_input">

        <label for="step_1_description">Step 1 Description:*</label>
        <textarea name="step_1_description" id="step_1_description" rows="8" cols="100" required></textarea>

        <label for="step_2_photo">Step 2 Photo:</label>
        <input type="file" name="step_2_photo" id="step_2_photo" class="file_input">

        <label for="step_2_description">Step 2 Description:</label>
        <textarea name="step_2_description" id="step_2_description" rows="8" cols="100"></textarea>

        <label for="step_3_photo">Step 3 Photo:</label>
        <input type="file" name="step_3_photo" id="step_3_photo" class="file_input">

        <label for="step_3_description">Step 3 Description:</label>
        <textarea name="step_3_description" id="step_3_description" rows="8" cols="100"></textarea>

        <label for="step_4_photo">Step 4 Photo:</label>
        <input type="file" name="step_4_photo" id="step_4_photo" class="file_input">

        <label for="step_4_description">Step 4 Description:</label>
        <textarea name="step_4_description" id="step_4_description" rows="8" cols="100"></textarea>

        <label for="step_5_photo">Step 5 Photo:</label>
        <input type="file" name="step_5_photo" id="step_5_photo" class="file_input">

        <label for="step_5_description">Step 5 Description:</label>
        <textarea name="step_5_description" id="step_5_description" rows="8" cols="100"></textarea>

        <label for="step_6_photo">Step 6 Photo:</label>
        <input type="file" name="step_4_photo" id="step_6_photo" class="file_input">

        <label for="step_6_description">Step 6 Description:</label>
        <textarea name="step_6_description" id="step_6_description" rows="8" cols="100"></textarea>

        <label for="step_7_photo">Step 7 Photo:</label>
        <input type="file" name="step_7_photo" id="step_7_photo" class="file_input">

        <label for="step_7_description">Step 7 Description:</label>
        <textarea name="step_7_description" id="step_7_description" rows="8" cols="100"></textarea>

        <label for="step_8_photo">Step 8 Photo:</label>
        <input type="file" name="step_8_photo" id="step_8_photo" class="file_input">

        <label for="step_8_description">Step 8 Description:</label>
        <textarea name="step_8_description" id="step_8_description" rows="8" cols="100"></textarea>

        <label for="step_9_photo">Step 9 Photo:</label>
        <input type="file" name="step_9_photo" id="step_9_photo" class="file_input">

        <label for="step_9_description">Step 9 Description:</label>
        <textarea name="step_9_description" id="step_9_description" rows="8" cols="100"></textarea>

        <label for="step_10_photo">Step 10 Photo:</label>
        <input type="file" name="step_10_photo" id="step_10_photo" class="file_input">

        <label for="step_10_description">Step 10 Description:</label>
        <textarea name="step_10_description" id="step_10_description" rows="8" cols="100"></textarea>

        <input type="submit" value="Add New Recipe" class="button">
    </form>
</main>
<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/footer.php";
?>