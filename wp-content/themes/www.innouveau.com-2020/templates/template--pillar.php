<?php 
/*
 * 	Template Name: Pillar
 */?>


<?php
    $featured_images = get_all_featured_images($page_id);
    $testimonial_id = get_field('testimonial');
    $category = get_field('category');
    $subtitle = get_field('subtitle');
?>

<?php get_header(); ?>

<div class="content template--pillar">

<div class="pillar-page__images">
            <?php
                foreach ($featured_images as $featured_image) {
                    echo '
                        <div class="pillar-page__image">
                            <img src="' . $featured_image .'">
                        </div>
                    ';
                }
            ?>
        </div>

    <div class="pagewrap">

        <div class="pillar__header">
            <h1>
                <?php the_title(); ?>
            </h1>
            <h3>
                <?php echo $subtitle; ?>
            </h3>
        </div>

        <div class="section">
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>

                <?php
                    the_content();
                    endwhile;
                    endif;
                ?>
        </div>
        <div class="section">
            <h3>
                Bekijk enkele projecten 👇
            </h3>
            <div class="cases">
                <?php
                    $args = array(
                        'category_name' => $category,
                        'posts_per_page' => 5

                    );
                    $q = new WP_Query($args);
                    if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                        $case_id = get_the_ID();
                        echo get_case($case_id, 2);
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