<div id="recipe-listing">
    <?php
        while($row = mysqli_fetch_assoc($results)){
            echo "<div class='recipe-detail'>";

            echo "<a href='recipe-detail.php?id=" . $row["id"] . "' class='recipe-link'>";
            echo $row["title"];
            echo "</a>";
            
            echo "<div class='adminTasks'>";
            echo "<a class='admin-button' id='edit-button' href='edit.php?id=" . $row["id"] ."'>Edit</a>";
            echo "<a class='admin-button' id='delete-button' href='delete.php?id=" . $row["id"] ."'>Delete</a>";
            echo "</div>";

            echo "</div>";
        }
    ?>
</div>