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
        <div class="section">
        Lees de uitgelichte case om meer te weten te komen over onze manier van werken.<br><br>
           <?php include('modules/cases-preview.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/nl/get-in-touch.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/testimonial.php'); ?>
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
            <?php include('modules/nl/follow-twitter.php'); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>