<?php
    function redirectTo($path)
    {
        header('Location: ' . $path);
    }

    function getFormattedDateTime()
    {
        return  date('Y-m-d H:i:s');
    }

?>