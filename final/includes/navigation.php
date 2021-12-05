<div id="header-container">
    <header>
        <h1><a href="index.php">RECIPEDIA</a></h1>
        <nav>
            <ul>
                <li><a href="index.php"
                class="<?php if($page_title == "Home") echo "active" ?>"
                >All</a></li>
                <li><a href="pasta.php"
                class="<?php if($page_title == "Pasta") echo "active" ?>">Pasta</a></li>
                <li><a  href="meat.php"
                class="<?php if($page_title == "Meat") echo "active" ?>">Meat</a></li>
                <li><a href="seafood.php"
                class="<?php if($page_title == "Seafood") echo "active" ?>">Seafood</a></li>
                <li><a href="vegetarian.php"
                class="<?php if($page_title == "Vegetarian") echo "active" ?>">Vegetarian</a></li>
                <li><a href="dessert.php"
                class="<?php if($page_title == "Dessert") echo "active" ?>">Dessert</a></li>
            </ul>
        </nav>
    </header>
</div>
    