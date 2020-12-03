<?php
    $title = get_the_title();
    $subtitle = get_field('subtitle');
    $intro = get_field('intro');
    $employee_id = get_field('employee');
    $video_id = get_field('video');
    $team = get_field('team');
    $site = get_field('site');
    $get_in_touch_text = get_field('get_in_touch_text');
    $page_id = get_the_ID();
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
?>
<div class="single--case">

    <div class="page__header">
        <div class="page__header-text">
            <h1>
                <?php echo $title; ?>
            </h1>
            <h2>
                <?php echo $subtitle; ?>
            </h2>
        </div>
<?php
        if ($images) {
            ?>
             <div
                        style="background-image: url(<?php echo $images[0]; ?>)"
                        class="page__header-main">
                       <?php include('image-payoff.php'); ?>
                    </div>
            <?php
        } else {
            echo '<div class="case__video">' . get_video($video_id) . '</div>';
        }
?>

        <div class="case__client-container">
           <?php echo get_client($page_id); ?>
        </div>
    </div>

    <div class="case__intro">
        <?php echo $intro; ?>
    </div>

    <?php
        if ($team) {
            echo '<div class="case__team">' . $team . '</div>';
        }
    ?>

    <?php
        if ($site) {
            echo '<div class="boxed-link">👉 <a href="' . $site . '" target="_blank">Bezoek de site</a></div>';
        }



    ?>





    <div class="case__body">
       <?php the_content(); ?>
    </div>

    <div class="section">
        <?php include(dirname(__DIR__) . '/modules/get-in-touch.php'); ?>
    </div>
</div>

<?php include(dirname(__DIR__) . '/modules/next-case.php'); ?>


