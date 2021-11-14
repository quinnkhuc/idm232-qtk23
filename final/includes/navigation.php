<div id="header-container">
    <header>
        <h1><a href="/index.php">RECIPEDIA</a></h1>
        <img src="/images/icons/menu.png" alt="Hamburger Menu Icon" id="hamburger-icon">
        <nav id="navigation">
            <ul>
                <li><a href="/index.php" id="all-nav" class="<?php 
                    if($page_title == "Home"){
                        echo "active";
                    }
                ?>">All</a></li>
                <li><a href="#" id="meat-nav" class="">Meat</a></li>
                <li><a href="#" id="seafood-nav">Seafood</a></li>
                <li><a href="#" id="pasta-nav" class="">Pasta</a></li>
                <li><a href="#" id="vegetarian-nav" class="">Vegetarian</a></li>
                <li><a href="#" id="dessert-nav" class="">Dessert</a></li>
                <li><a href="/login.php" id="login-button" class="<?php 
                    if($page_title == "Login"){
                        echo "active";
                    }
                ?>">Login</a></li>
            </ul>
        </nav>
    </header>
</div>

<script>
    let hamburgerIcon = document.getElementById("hamburger-icon");
    let navigation = document.getElementById("navigation");

    hamburgerIcon.addEventListener("click", function(){
        if(navigation.style.display == "block"){
            navigation.style.display = "none";
        } else {
            navigation.style.display = "block";
        }
    });
</script>
    