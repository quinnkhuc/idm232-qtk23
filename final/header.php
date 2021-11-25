<?php
    require_once "config.php";
    require_once "includes/database.php";
    require_once "includes/helper.php";
    require_once "includes/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Catamaran:300,400,500,600,700,800,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,500,600,700,800,900'>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <?php 
        if($page_title == "Home"){
            echo "<link rel=\"stylesheet\" href=\"styles/search.css\">";
            echo "<link rel=\"stylesheet\" href=\"styles/index.css\">";
        } else if($page_title == "Login" || $page_title == "Add A New Recipe" || $page_title == "Edit"){
            echo "<link rel=\"stylesheet\" href=\"styles/form.css\">";
        } else {
            echo "<link rel=\"stylesheet\" href=\"styles/recipe.css\">";
        }
    ?>
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
<?php 
    include_once "includes/navigation.php";
?>