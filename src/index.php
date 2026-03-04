<?php include("header.php"); ?>

<?php include("menu-mobile.php"); ?>
<main>
    <section class="section-bg">
        <?php include("menu.php"); ?>
        <article class="article-1">
            <aside class="acide-1">
                <img class="logo2" src="Image/logo-2.png" alt="logo2">
                <h1 class="h1-1">Elodie Colet</h1>
                <h2 class="h2-2">Coach sportif, conseils nutrition<br>et bien-être<br>06 07 57 05 17</h2>
            </aside>
            <figure class="figure-1">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img class="img-slides" src="Image/diapo-1.jpg" alt="Coaching sportif personnalisé en Guyane - HelloSport" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img class="img-slides" src="Image/diapo-2.jpg" alt="Coaching sportif personnalisé en Guyane - HelloSport" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img class="img-slides" src="Image/image-tournante-2.JPG" alt="Coaching sportif personnalisé en Guyane - HelloSport" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img class="img-slides" src="Image/image-tournante-3.JPG" alt="Coaching sportif personnalisé en Guyane - HelloSport" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img class="img-slides" src="Image/image-tournante-5.jpg" alt="Coaching sportif personnalisé en Guyane - HelloSport" style="width:100%">
                    </div>
                </div>
            </figure>
            <p class="p-1">« LA MOBILITÉ EST UNE PRIORITE. LA DOULEUR<br>N’EST PAS ACCEPTABLE. REPRENEZ LE CONTROLE ! »<br>Aurélien Broussal</p>
        </article>
        <article class="article-2">
            <figure class="figure-2">
                <h1 class="h1-2">Mon Objectif</h1>
                <p class="p-2">Que vous soyez sportif, moins sportif, homme ou femme, mon but est de parcourir ensemble un bout de chemin pour vous donner goût et coeur en ce que vous êtes et ce que vous faites.<br><br>Quelque soit votre objectif, il sera ma priorité. Nous établirons ensemble un programme personnalisé afin d'améliorer votre forme, votre santé, votre stress, votre alimentation. Gagnez du temps, le sport s'invite chez vous, je fournis le matériel.<br><br>Prêt à embarquer ?</p>
                <div class="div-1">
                    <div class="div-icon div-icon-1">
                        <img class="img-icon img-icon-1" src="Image/icon-1.png" alt="icon-1">
                        <h2 class="h2-3">coaching à domicile</h2>
                    </div>
                    <div class="div-icon div-icon-2">
                        <img class="img-icon" src="Image/icon-2.png" alt="icon-2">
                        <h2 class="h2-3">cours collectifs</h2>
                    </div>
                    <div class="div-icon div-icon-3">
                        <img class="img-icon" src="Image/icon-3.png" alt="icon-3">
                        <h2 class="h2-3">marche nordique</h2>
                    </div>
                </div>
            </figure>
        </article>
    </section>
    <section class="section-bg-2">
        <article class="article-3">
            <figure class="figure-3">
                <h1 class="h1-3">Qui je suis</h1>
                <p class="p-3">Hello! Moi c'est Elodie, 37 ans, maman de deux enfants. Du dynamisme? J'en ai à revendre. La motivation? à 100%.<br><br>De l'optimisme?<br><br>Toujours!<br><br>Nous passons une grande partie de notre vie au travail, autant s'y éclater! C'est à 32 ans que j'ai repris le chemin des études et que j'ai obtenu mon BPJEPS "Activités de la Forme option Haltérophilie, Musculation , et Cours Collectifs", complété par une formation de pilâtes et coach en marche nordique.<br><br>L'écologie et la santé sont pour moi des priorités étroitement liées. Convaincue que la santé de notre planète passe d'abord par celle de ses habitants, je prends mon rôle d'éducateur sportif très à coeur, afin d'oeuvrer au mieux être de notre monde. <br><br>Le sport permet l'harmonie du corps et de l'esprit, combiné à une alimentation plus responsable et consciente, nous ne pouvons qu'avancer dans la bonne direction. <br><br>Aventurière dans l'âme, aimant relever les défis, c'est à Kourou en Amazonie que j'ai posé mes valises. Sans cesse à la recherche de nouvelles techniques, matériels et innovations pour vous surprendre, j'adore casser la routine. <br><br>Embarcation imminente!<br><br></p>
            </figure>
        </article>
    </section>
    <?php include("section-3.php"); ?>
</main>

<script>
    let slideIndex = 0;
    showSlides1();

    function showSlides1() {
        let slides = document.getElementsByClassName("mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides1, 5000);
    }
</script>

<?php include("footer.php"); ?>
