<section class="section-3">
    <article class="article-4">
        <figure class="figure-4">
            <div class="res-soc">
                <a href="https://www.instagram.com/hello_sport_elo/" class="reseau"><img src="Image/insta.png" alt="instagramme" class="img-reseau img-insta"></a>
                <a href="https://www.facebook.com/hellosportcoachingKourou/about/?ref=page_internal" class="reseau"><img src="Image/facebook.png" alt="facebook" class="img-reseau"></a>
            </div>
            <div class="slideshow-container-2">
                <div class="mySlides-2 fade-2">
                    <img class="img-slides-2" src="Image/image-message-1.png" alt="avis Coaching sportif personnalisé en Guyane - HelloSport">
                </div>

                <div class="mySlides-2 fade-2">
                    <img class="img-slides-2" src="Image/image-message-2.png" alt="avis Coaching sportif personnalisé en Guyane - HelloSport">
                </div>

                <div class="mySlides-2 fade-2">
                    <img class="img-slides-2" src="Image/image-message-3.png" alt="avis Coaching sportif personnalisé en Guyane - HelloSport">
                </div>

                <div class="mySlides-2 fade-2">
                    <img class="img-slides-2" src="Image/image-message-4.png" alt="avis Coaching sportif personnalisé en Guyane - HelloSport">
                </div>

                <div class="mySlides-2 fade-2">
                    <img class="img-slides-2" src="Image/image-message-5.png" alt="avis Coaching sportif personnalisé en Guyane - HelloSport">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <p class="p-4">Bouger et manger mieux pour vivre mieux.</p>
        </figure>
    </article>
</section>

<script>
    let slideIndex_2 = 1;
    showSlides2(slideIndex_2);

    function plusSlides(n) {
        showSlides2(slideIndex_2 += n);
    }

    function showSlides2(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides-2");
        if (n > slides.length) { slideIndex_2 = 1 }
        if (n < 1) { slideIndex_2 = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex_2 - 1].style.display = "block";
    }
</script>
