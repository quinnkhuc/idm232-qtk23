<?php 
    $page_title = "Login";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/header.php";
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
<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . "/global/footer.php";
?>