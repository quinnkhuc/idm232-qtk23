<?php
    //Connect to database
    $db_connection = mysqli_connect(
        $app["db_host"],
        $app["db_user"],
        $app["db_password"],
        $app["db_database_name"]
    );

    //Check if connection has been successfully established
    if(!$db_connection){
        echo "Connection Error: " . mysqli_connect_error();
        exit();
    }
?>