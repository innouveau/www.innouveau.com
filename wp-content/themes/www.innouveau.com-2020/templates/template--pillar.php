<?php 
/*
 * 	Template Name: Pillar
 */?>


<?php
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
    $testimonial_id = get_field('testimonial');
    $category = get_field('category');
?>

<?php get_header(); ?>

<div class="content template--pillar">
    <div class="pagewrap">
        <div class="page__header">
            <div
                style="background-image: url(<?php echo $images[0]; ?>)"
                class="page__header-main">
                <div class="page__header-text">

                </div>
            <?php include(dirname(__DIR__) . '/modules/image-payoff.php'); ?>
            </div>
        </div>

        <h1>
            <?php the_title(); ?>
        </h1>

        <div class="section">
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>

                <?php
                    the_content();
                    endwhile;
                    endif;
                ?>
        </div>
        <div class="section">
            <div class="cases">
                <?php
                    $args = array(
                        'category_name' => $category,
                        'posts_per_page' => 5

                    );
                    $q = new WP_Query($args);
                    if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                        $case_id = get_the_ID();
                        get_case($case_id, 2);
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
        <div class="section">
            <div class="testimonial__container">
                <?php echo get_testimonial($testimonial_id, true); ?>
            </div>
        </div>
         <div class="section">
            <?php include(dirname(__DIR__) . '/modules/follow-twitter.php'); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>