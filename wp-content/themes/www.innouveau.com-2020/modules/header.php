<script>
    function initHeader() {
        $(window).scroll(function (event) {
            let scroll = $(window).scrollTop();
            if (scroll > 80) {
                $('.header').addClass('header--small');
            } else {
                $('.header').removeClass('header--small');
            }

            if (scroll > 150) {
                $('.header').addClass('header--small--delay');
            } else {
                $('.header').removeClass('header--small--delay');
            }
        });
    }
</script>

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

    <?php include('language.php'); ?>

    <div class="hamburger">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
    </div>
</div>