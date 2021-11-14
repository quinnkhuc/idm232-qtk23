<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Catamaran:300,400,500,600,700,800,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,500,600,700,800,900'>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/navigation.css">
    <?php 
        if($page_title == "Home"){
            echo "<link rel=\"stylesheet\" href=\"../styles/search.css\">";
            echo "<link rel=\"stylesheet\" href=\"../styles/index.css\">";
        } else if($page_title == "Admin Home"){
            echo "<link rel=\"stylesheet\" href=\"../styles/search.css\">";
            echo "<link rel=\"stylesheet\" href=\"../styles/index.css\">";
            echo "<link rel=\"stylesheet\" href=\"../styles/admin.css\">";
        } else if($page_title == "Login"){
            echo "<link rel=\"stylesheet\" href=\"../styles/login.css\">";
        } else {
            echo "<link rel=\"stylesheet\" href=\"../styles/recipe.css\">";
        }
    ?>
</head>
<body>
    