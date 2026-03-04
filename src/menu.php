<nav class="menu" id="menu-desktop">
    <img src="Image/logo.png" alt="Coaching sportif personnalisé en Guyane - HelloSport" class="logo-menu" >
    <ul class="ul-menu">
        <li class="li-menu">
            <a class="a-menu <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>" href="index.php">A propos</a>
        </li>
        <li class="li-menu">
            <a class="a-menu <?php if(basename($_SERVER['PHP_SELF']) == 'prestation.php') echo 'active'; ?>" href="prestation.php">Prestations</a>
        </li>
        <li class="li-menu">
            <a class="a-menu <?php if(basename($_SERVER['PHP_SELF']) == 'sport-et-entreprise.php') echo 'active'; ?>" href="sport-et-entreprise.php">Sport et Entreprise</a>
        </li>
        <li class="li-menu">
            <a class="a-menu <?php if(basename($_SERVER['PHP_SELF']) == 'marche-nordique.php') echo 'active'; ?>" href="marche-nordique.php">Marche Nordique</a>
        </li>
        <li class="li-menu">
            <a class="a-menu <?php if(basename($_SERVER['PHP_SELF']) == 'tarifs.php') echo 'active'; ?>" href="tarifs.php">Tarifs</a>
        </li>
        <li class="li-menu">
            <a class="a-menu <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>" href="contact.php">Contactez-moi</a>
        </li>
    </ul>
</nav>

<script>
    window.addEventListener('load', function() {
        const activeLink = document.querySelector('.a-menu.active');
        if (activeLink) {
            setTimeout(function() {
                activeLink.classList.add('animate');
            }, 100);
        }
    });
</script>
