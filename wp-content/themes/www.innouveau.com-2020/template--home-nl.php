<?php 
/*
 * 	Template Name: Home NL
 */?>


<?php

?>

<?php get_header(); ?>

<div class="content content--home">
    <div class="pagewrap">
        <div class="section">
            <?php include('modules/slogan.php'); ?>
        </div>
        <div class="section">
            <div class="intro">
                <p>
                Innouveau is een webdevelopment-bureau gespecialiseerd in online applicaties.
                We ondersteunen bedrijven, (ontwerp)bureaus en agency’s bij
                integrale webprojecten, van design tot development.
                </p>
            </div>
            <!--
            <div class="intro-video">
                <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/odYCqTXRvQ0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>-->
        </div>
        <div class="section section--centered">
        Lees de uitgelichte case om meer te weten te komen over onze manier van werken.<br><br>
           <?php include('modules/cases-preview.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/get-in-touch.php'); ?>
        </div>
        <div class="section">
            <?php
                $testimonial_id = 85;
                $testimontials_id = 50;
            ?>
            <div class="testimonial-home">
                <div class="testimonial-home__container">
                    <div class="testimonial-home__statement">
                        We zijn betrokken bij klant en product:
                    </div>
                    <?php echo get_testimonial($testimonial_id, true); ?>
                </div>
                <a
                    href="<?php echo get_the_permalink($testimontials_id); ?>"
                    class="testimonial-home__more">
                    Toon meer testimonials<br>
                    <div class="arrow-link arrow-link--small"></div>
                </a>
            </div>
        </div>
    </div>

    <div class="section section--worked-for">
        <div class="pagewrap">
            <div class="worked-for">
                <div class="worked-for__label">
                    Innouveau heeft gewerkt voor:
                </div>
                <?php include('modules/worked-for.php'); ?>
            </div>
        </div>
    </div>

    <div class="pagewrap">
        <div class="section section--centered">
           <?php include('modules/infographics-preview.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/follow-twitter.php'); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>