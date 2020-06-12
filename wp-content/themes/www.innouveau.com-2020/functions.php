<?php 

//$url = 'http://localhost/innouveau/www.innouveau.com-2020/dev/';
//$url = 'https://innouveau.com/projecten/2020/';
//update_option('siteurl', $url );
//update_option('home', $url );

register_nav_menu('main', 'The main menu');
add_theme_support('post-thumbnails');
add_filter('widget_text','do_shortcode');
add_filter('the_content','do_shortcode');

function testimonial_shortcode($atts) {
    $testimonial_id = shortcode_atts;
    //return '';
    return '<div class="case__testimonial">' . get_testimonial($atts['id'], false) . '</div>';
}

add_shortcode( 'testimonial', 'testimonial_shortcode' );



function get_employee($employee_id) {
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $employee_id ), 'full' );
    $name = get_the_title($employee_id);
    $email = get_field('email', $employee_id);
    $linkedin = get_field('linkedin', $employee_id);
    $telephone = get_field('telephone', $employee_id);


    $html = '
        <div class="employee">
            <div
                style="background-image: url(' . $images[0] . ')"
                class="employee__image"></div>
            <div class="employee__text">
                <div class="employee__name">
                    ' . $name . '
                </div>
                <div class="employee__email">
                    <a href="mailto:' . $email . '" target="_blank">
                        ' . $email . '
                    </a>
                </div>
                <div class="employee__telephone">
                    ' . $telephone . '
                </div>
                <div class="employee__email">
                    <a href="' . $linkedin . '" target="_blank">
                        LinkedIn
                    </a>
                </div>
            </div>
            <div class="employee__identity">
                <div class="innouveau-logo__icon">
                    <div class="yellow-square"></div>
                    <div class="red-circle"></div>
                </div>
            </div>
        </div>
    ';
    return $html;
}

function get_testimonial($testimonial_id, $with_permalink) {
    $testimonial = get_post($testimonial_id);
    $testimonial_quote = $testimonial->post_content;
    $testimonial_client = get_the_title($testimonial_id);
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $testimonial_id ), 'full' );
    $client_position = get_field('client_position', $testimonial_id);
    $case_id = get_field('case', $testimonial_id);
    $case_title = get_the_title($case_id);
    $case_permalink = get_the_permalink($case_id);
    $html = '
        <div class="testimonial">
            <div class="testimonial__main">
                <div class="testimonial__quote">
                    ' . $testimonial_quote . '
                </div>
                <div class="testimonial__client">
                    <div
                        style="background-image: url(' . $images[0] . ')"
                        class="testimonial__avator">
                    </div>
                    <div class="testimonial__client-description">
                        <div class="testimonial__client-name">
                            ' . $testimonial_client . '
                        </div>
                        <div class="testimonial__client-position">
                            ' . $client_position . '
                        </div>
                    </div>
                </div>
            </div>';
        if ($with_permalink) {
            $html .=
            '<div class="testimonial__footer">
            Read more about this case:
                <a href="<?php echo $case_permalink; ?>">
                     ' . $case_title . '
                </a>
            </div>';
        }
        $html .= '</div>';
    return $html;
}

function get_case($case_id, $size) {
        $case = get_post($case_id);
        $intro = get_field('intro', $case_id);
        $title = get_the_title($case_id);
        $permalink = get_the_permalink($case_id);
        $images = wp_get_attachment_image_src( get_post_thumbnail_id( $case_id ), 'full' );
        $video_id = get_field('video', $case_id);
    ?>
        <div class="case case--size-<?php echo $size; ?>">
            <a
                href="<?php echo $permalink; ?>"
                class="case__title">
                <?php echo $title; ?>
            </a>
            <div class="case__video">
                <?php get_video($video_id); ?>
            </div>
            <a
                href="<?php echo $permalink; ?>"
                class="case__main">
                <div class="case__about">
                    <div class="case__about-preview">
                        <?php echo $intro; ?>
                    </div>
                    <p>
                        Read more about this case:
                        <span class="case__read-more" href="<?php echo $permalink; ?>">
                             <?php echo $title; ?>
                        </span>
                    </p>
                </div>
                <?php get_client($case_id); ?>


            </a>

        </div>
    <?php
}

function get_client($case_id) {
    $client = get_field('client', $case_id);
    $client_name = $client['name'];
    $client_description = $client['description'];
    $client_logo = $client['logo'];
    ?>
    <div class="case__client">
        <div
            style="background-image: url(<?php echo $client_logo; ?>)"
            class="case__avator">
        </div>
        <div class="case__client-description">
            <div class="case__client-name">
                <?php echo $client_name; ?>
            </div>
            <div class="case__client-position">
                <?php echo $client_description; ?>
            </div>
        </div>
    </div>
    <?php
}

function get_video($video_id) {
    ?>
    <div class="video" data-video-id="<?php echo $video_id; ?>">
        <div
            id="video-<?php echo $video_id; ?>"
            class="video__container"></div>
    </div>
    <?php
}

