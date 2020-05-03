<?php 

//$url = '';
//update_option('siteurl', $url );
//update_option('home', $url );

register_nav_menu('main', 'The main menu');
add_theme_support('post-thumbnails');


function get_testimonial($testimonial_id) {
    $testimonial = get_post($testimonial_id);
    $testimonial_quote = $testimonial->post_content;
    $testimonial_client = get_the_title($testimonial_id);
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $testimonial_id ), 'full' );
    $client_position = get_field('client_position', $testimonial_id);
    $case_id = get_field('case', $testimonial_id);
    $case_title = get_the_title($case_id);
    $case_permalink = get_the_permalink($case_id);

    ?>
        <div class="testimonial">
            <div class="testimonial__main">
                <div class="testimonial__quote">
                    <?php echo $testimonial_quote; ?>
                </div>
                <div class="testimonial__client">
                    <div
                        style="background-image: url(<?php echo $images[0]; ?>)"
                        class="testimonial__avator">
                    </div>
                    <div class="testimonial__client-description">
                        <div class="testimonial__client-name">
                            <?php echo $testimonial_client; ?>
                        </div>
                        <div class="testimonial__client-position">
                            <?php echo $client_position; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial__footer">
            Read more about this case:
                <a href="<?php echo $case_permalink; ?>">
                     <?php echo $case_title; ?>
                </a>
            </div>
        </div>
    <?php

}

