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
    return '<div class="case__testimonial testimonial--' . $atts['size'] . '">' . get_testimonial($atts['id'], false) . '</div>';
}

function employee_shortcode($atts) {
    return '<div class="employee-container">' . get_employee($atts['id']) . '</div>';
}

function case_shortcode($atts) {
    return '<div class="case-container">' . get_case($atts['id'], 0) . '</div>';
}

function page_shortcode($atts) {
    $link =  get_the_permalink($atts['id']);
    $title = get_the_title($atts['id']);
    $language = pll_current_language();
    if ($language == 'en') {
        $text = 'Read more about... ';
    } else {
        $text = 'Lees meer over... ';
    }
    return '<div class="boxed-link">👉 <a href="' . $link . '">' . $text . $title . '</a></div>';
}

function employees_shortcode($atts) {
    return '<div class="employee-container">' . get_employee(513) . ' ' . get_employee(528) . '</div>';
}

add_shortcode( 'case', 'case_shortcode' );
add_shortcode( 'page', 'page_shortcode' );
add_shortcode( 'testimonial', 'testimonial_shortcode' );
add_shortcode( 'employee', 'employee_shortcode' );
add_shortcode( 'employees', 'employees_shortcode' );

// extra featured images


add_filter( 'kdmfi_featured_images', function( $featured_images ) {
    for ($i = 1; $i < 6; $i++) {
        $args = array(
            'id' => 'featured-image-' . $i,
            'desc' => '',
            'label_name' => 'Featured Image ' . $i,
            'label_set' => 'Set featured image ' . $i,
            'label_remove' => 'Remove featured image ' . $i,
            'label_use' => 'Set featured image ' . $i,
            'post_type' => array( 'page' ),
        );

        $featured_images[] = $args;
    }
    return $featured_images;
});

function get_all_featured_images($page_id) {
    $featured_images = [];
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
    array_push($featured_images, $images[0]);
    for ($i = 1; $i < 6; $i++) {
        $featured_image = kdmfi_get_featured_image_src( 'featured-image-' . $i, 'full' );
        array_push($featured_images, $featured_image);
    }
    return $featured_images;
}






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

function get_testimonial($original_id, $with_permalink) {
    $translations = pll_get_post_translations($original_id);
    $language = pll_current_language();
    $testimonial_id = $translations[$language];
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
            '<div class="testimonial__footer">';
            $language = pll_current_language();
            if ($language == 'en') {
                $html .= '👉 Read more about this case:';
            } else {
                $html .= '👉 Lees meer over dit project:';
            }
            $html .= '<a href="' . $case_permalink . '">
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
        $case_preview_image = get_field('case_preview_image', $case_id);

        $html = '
        <div class="case case--size-' . $size . '">
            <a
                href="' . $permalink . '"
                class="case__title">
                ' . $title . '
            </a>';
        if ($video_id) {
            $html .= '<div class="case__video">' . get_video($video_id) . '</div>';
        } else {
            $html .= '<div style="background-image: url(' . $case_preview_image . ')" class="case__image"></div>';
        }

        $html .= '
            <a
                href="' . $permalink . '"
                class="case__main">
                <div class="case__about">
                    <div class="case__about-preview">
                        ' . $intro . '
                    </div>
                    <div class="case__read-more">';
        $language = pll_current_language();
        if ($language == 'en') {
            $html .= '👉 <span>Read more about this case: ';
        } else {
            $html .= '👉 <span>Lees meer over dit project: ';
        }


        $html .= $title . '
                        </span>
                    </div>
                </div>
                ' . get_client($case_id) . '
            </a>
        </div>';
        return $html;
}


function get_client($case_id) {
    $client = get_field('client', $case_id);
    $client_name = $client['name'];
    $client_description = $client['description'];
    $client_logo = $client['logo'];
    return '
    <div class="case__client">
        <div
            style="background-image: url(' . $client_logo . ')"
            class="case__avator">
        </div>
        <div class="case__client-description">
            <div class="case__client-name">
                ' . $client_name . '
            </div>
            <div class="case__client-position">
                ' . $client_description . '
            </div>
        </div>
    </div>';
}

function get_video($video_id) {
    return '
    <div class="video" data-video-id="' . $video_id . '">
        <div
            id="video-' . $video_id . '"
            class="video__container"></div>
    </div>';
}

