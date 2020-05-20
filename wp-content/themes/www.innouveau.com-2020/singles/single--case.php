<?php
    $title = get_the_title();
    $subtitle = get_field('subtitle');
    $intro = get_field('intro');
    $testimonial_id = get_field('testimonial');
    $video_id = get_field('video');
    $page_id = get_the_ID();
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
?>
<div class="single--case">

    <div class="case__header">
        <div
            style="background-image: url(<?php echo $images[0]; ?>)"
            class="case__header-main">
            <div class="case__header-text">
                <h1>
                    <?php echo $title; ?>
                </h1>
                <h2>
                    <?php echo $subtitle; ?>
                </h2>
            </div>
           <?php include('image-payoff.php'); ?>
        </div>
        <div class="case__client-container">
           <?php echo get_client($page_id); ?>
        </div>
    </div>

    <div class="case__intro">
        <?php echo $intro; ?>
    </div>


    <div class="case__video">
        <?php echo get_video($video_id); ?>
    </div>




    <div class="case__body">
       <?php echo get_the_content(); ?>
    </div>

    <div class="case__testimonial">
         <?php echo get_testimonial($testimonial_id, false); ?>
    </div>

    <div class="section">
        <?php include(dirname(__DIR__) . '/modules/get-in-touch.php'); ?>
    </div>
</div>

<?php include(dirname(__DIR__) . '/modules/next-case.php'); ?>


