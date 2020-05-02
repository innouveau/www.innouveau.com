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
            <?php include('modules/slogan.php'); ?>
        </div>
        <div class="section">
            <div class="intro">
                <p>
                Innouveau is a web development angency based in the Netherlands,
                specialised in online applications.
                We support companies, startups and (design)agencies
                in their online projects from A to Z.
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
        Check out the featured case, to learn more about how we work,
        what we are able to create, how we did it and what challenges we met on the way.<br><br>
           <?php include('modules/cases-preview.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/get-in-touch.php'); ?>
        </div>
        <div class="section">
            <?php include('modules/testimonial.php'); ?>
        </div>
    </div>

    <div class="section section--worked-for">
        <div class="pagewrap">
            <?php include('modules/worked-for.php'); ?>
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