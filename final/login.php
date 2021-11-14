<?php 
    $page_title = "Login";
    include "includes/header.php";
    include "includes/navigation.php";
?>
<main>
    <h2>Login</h2>
    <form>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <input type="submit" value="Login" class="button">
    </form>
</main>