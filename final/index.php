<?php 
    $page_title = "Home";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/includes/search.php";
?>
<main>
    <h2>All recipe</h2>
    <div id="recipe-listing">
        <div class="recipe-detail">
            <a href="recipe-detail.php">
                <figure>
                    <div>
                        <img srcset="images/recipe-covers/ancho-orange-chicken-large.jpg 800w,
                                images/recipe-covers/ancho-orange-chicken-medium.jpg 500w,
                                images/recipe-covers/ancho-orange-chicken-small.jpg 250w"
                        sizes="(min-width: 900px) 30vw, 80vw"
                        src="images/recipe-covers/ancho-orange-chicken-small.jpg"
                        alt="Ancho-Orange Chicken"/>
                    </div>
                    <figcaption>Ancho-Orange Chicken</figcaption>
                </figure>
            </a>
        </div>
    </div>
</main>
<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/footer.php";
?>