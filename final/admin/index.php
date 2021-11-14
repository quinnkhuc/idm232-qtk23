<?php 
    //Establish database connection
    

    $page_title = "Admin Home";
    include "../includes/header.php";
    include "../includes/navigation.php";
    include "../includes/search.php";
?>
<main>
    <div id="recipe-header">
        <h2>All recipe</h2>
        <button class="admin-button">Add new recipe</button>
    </div>
    <div id="recipe-listing">
        <div class="recipe-detail">
            <a href="recipe-detail.php">
                <figure>
                    <div>
                        <img srcset="../images/recipe-covers/ancho-orange-chicken-large.jpg 800w,
                                ../images/recipe-covers/ancho-orange-chicken-medium.jpg 500w,
                                ../images/recipe-covers/ancho-orange-chicken-small.jpg 250w"
                        sizes="(min-width: 900px) 30vw, 80vw"
                        src="../images/recipe-covers/ancho-orange-chicken-small.jpg"
                        alt="Ancho-Orange Chicken"/>
                    </div>
                    <figcaption>Ancho-Orange Chicken</figcaption>
                </figure>
            </a>
            <div class="adminTasks">
                <button class="admin-button">Edit</button>
                <button class="admin-button">Delete</button>
            </div>
        </div>
    </div>
</main>
<?php 
    include "../includes/footer.php";
?>