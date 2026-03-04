<nav class="menu-m" id="menu-mobile">
    <div class="menu-content">
        <div>
            <img src="Image/logo.png" alt="logo" class="logo-menu-m">
        </div>
        <div>
            <button id="menu-button" class="menu-button-m">☰</button>
        </div>
    </div>
    <ul class="ul-menu-m" id="dropdown-menu">
        <li class="li-menu-m">
            <a class="a-menu-m <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>" href="index.php">A propos</a>
        </li>
        <li class="li-menu-m">
            <a class="a-menu-m <?php if(basename($_SERVER['PHP_SELF']) == 'prestation.php') echo 'active'; ?>" href="prestation.php">Prestations</a>
        </li>
        <li class="li-menu-m">
            <a class="a-menu-m <?php if(basename($_SERVER['PHP_SELF']) == 'sport-et-entreprise.php') echo 'active'; ?>" href="sport-et-entreprise.php">Sport et Entreprise</a>
        </li>
        <li class="li-menu-m">
            <a class="a-menu-m <?php if(basename($_SERVER['PHP_SELF']) == 'marche-nordique.php') echo 'active'; ?>" href="marche-nordique.php">Marche Nordique</a>
        </li>
        <li class="li-menu-m">
            <a class="a-menu-m <?php if(basename($_SERVER['PHP_SELF']) == 'tarifs.php') echo 'active'; ?>" href="tarifs.php">Tarifs</a>
        </li>
        <li class="li-menu-m">
            <a class="a-menu-m <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>" href="contact.php">Contactez-moi</a>
        </li>
    </ul>
</nav>

<script>
    document.getElementById("menu-button").addEventListener("click", function() {
        var dropdownMenu = document.getElementById("dropdown-menu");
        if (dropdownMenu.style.display === "block") {
            dropdownMenu.style.display = "none";
        } else {
            dropdownMenu.style.display = "block";
        }
    });
</script>
