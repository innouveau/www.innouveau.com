<div class="header">
    <div class="identity">
        <a href="<?php echo get_bloginfo('home'); ?>">
            <?php include('logo.php'); ?>
        </a>
        <div class="identity__slogan">
            Code that loves design
        </div>
    </div>

    <div class="header__page-title">
        <?php the_title(); ?>
    </div>

    <?php
        //include('language.php');
    ?>

    <div class="hamburger">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
    </div>
</div>