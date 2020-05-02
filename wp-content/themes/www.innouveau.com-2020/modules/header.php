<script>
    function initHeader() {
        $(window).scroll(function (event) {
            let scroll = $(window).scrollTop();
            console.log(scroll);
            if (scroll > 80) {
                $('.header').addClass('header--small');
            } else {
                $('.header').removeClass('header--small');
            }
        });
    }
</script>

<div class="header">
    <div class="identity">
        <div href="<?php echo get_bloginfo('home'); ?>">
            <?php include('logo.php'); ?>
        </div>
    </div>
    <div class="hamburger">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
    </div>
</div>