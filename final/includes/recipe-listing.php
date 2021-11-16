<div id="recipe-listing">
    <?php
        while($recipe = mysqli_fetch_assoc($results)){
            echo "<div class='recipe-detail'>";
            echo "<a href='/recipe-detail.php?id=" . $recipe["id"] . "'>";
            echo "<figure>";
            echo "<div>";
            echo "<img srcset='../images/recipe-covers ancho-orange-chicken-large.jpg 800w,
            ../images/recipe-covers/ancho-orange-chicken-medium.jpg 500w,
            ../images/recipe-covers/ancho-orange-chicken-small.jpg 250w'
            sizes='(min-width: 900px) 30vw, 80vw'
            src='../images/recipe-covers/ancho-orange-chicken-small.jpg'
            alt='" . $recipe["title"] . "'/>";
            echo "</div>";
            echo "<figcaption>" . $recipe["title"] . "</figcaption>";
            echo "</figure>";
            echo "</a>";
            
            if($page_title == "Admin Home"){
                echo "<div class='adminTasks'>";
                echo "<button class='admin-button'>Edit</button>";
                echo "<button class='admin-button'>Delete</button>";
                echo "</div>";
            }

            echo "</div>";
        }
    ?>
</div>