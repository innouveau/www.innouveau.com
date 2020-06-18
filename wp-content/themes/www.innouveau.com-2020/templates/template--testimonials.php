<?php
/*
 * 	Template Name: Testimonials
 */?>

 <?php get_header(); ?>


 <div class="content">
     <div class="pagewrap">
         <div class="page__intro">
             <?php if(have_posts()): while(have_posts()) : the_post(); ?>

                  <?php the_content(); ?>

              <?php endwhile; endif; ?>
         </div>

         <div class="testimonials">
            <?php

                $args = array(
                    'category_name' => 'testimonial'
                );
                $q = new WP_Query($args);
                if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                    $testimonial_id = get_the_ID();
                    echo get_testimonial($testimonial_id, true);
                endwhile;
                endif;
            ?>
         </div>
     </div>
 </div>


 <?php get_footer(); ?>