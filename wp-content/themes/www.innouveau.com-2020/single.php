<?php get_header(); ?>


<div class="content">
    <div class="pagewrap">
         <?php
            if(have_posts()): while(have_posts()) : the_post();
                if (has_category('case') || has_category('case-en')) {
                    include('singles/single--case.php');
                }
            endwhile; endif;
            ?>
    </div>
</div>

<?php get_footer(); ?>