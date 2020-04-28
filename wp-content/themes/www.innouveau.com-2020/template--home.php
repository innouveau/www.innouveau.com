<?php 
/*
 * 	Template Name: Home
 */?>


<?php

?>

<?php get_header(); ?>

<div class="content content--home">
    <div class="pagewrap">
        <div class="section">
            <div class="intro">
                Innouveau is a web development angency specialised in online applications.
                We support companies, startups and (design)agencies
                in webproject from A to Z.
            </div>
        </div>
        <div class="section">
            <?php include('modules/slogan.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/follow-twitter.php'); ?>
        </div>
        <div class="section section--centered">
            Check out some featured cases, to learn more about how we work,
            what we are able to create, how we did it and what challenges we met on the way.
           <?php include('modules/cases-preview.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/get-in-touch.php'); ?>
        </div>
         <div class="section section--centered">
            <p>
               Innouveau also creates awesome interactive infographics.<br>
               Read more about <a href="<?php echo get_template_directory_uri(); ?>/infographics">infographics</a>.
            </p>
            <p>
                <div class="home__images">
                <img
                    class="home__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/other/innouveau-infographics-cleaner-air-for-all.png">
                <img
                    class="home__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/other/innouveau-infographics-paper-recycling.png">
                </div>
            </p>
        </div>
        <div class="section">
            <?php include('modules/testimonial.php'); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>