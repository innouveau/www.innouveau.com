<?php
/*
 * 	Template Name: Cases
 */?>

 <?php get_header(); ?>


 <div class="content">
     <div class="pagewrap">
         <?php if(have_posts()): while(have_posts()) : the_post(); ?>

             <?php the_content(); ?>

         <?php endwhile; endif; ?>

         <div class="cases">
            <?php

                $args = array(
                    'category__and' => array(2,22)
                );
                $q = new WP_Query($args);
                if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                    $case_id = get_the_ID();
                    get_case($case_id, 2);
                endwhile;
                endif;
            ?>
         </div>

        <div class="section">
            <?php include(dirname(__DIR__) . '/modules/follow-twitter.php'); ?>
        </div>
     </div>
 </div>


 <?php get_footer(); ?>