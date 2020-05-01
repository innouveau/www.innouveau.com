<?php
    $case_id = 12;
    $case = get_post($case_id);
    $case_about = $case->post_content;

    $title = get_the_title($case_id);
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $case_id ), 'full' );

    $client = get_field('client', $case_id);
    $client_name = $client['name'];
    $client_description = $client['description'];
    $client_logo = $client['logo'];
?>

<div class="cases">
    <div class="case__container">
        <div class="case">
            <div class="case__title">
                <?php echo $title; ?>
            </div>
            <div
                style="background-image: url(<?php echo $images[0]; ?>)"
                class="case__image">
            </div>
            <div class="case__about">
                <div class="case__about-preview">
                    <?php echo $case_about; ?>
                </div>
                <p>
                    Read more about this case:
                    <a class="case__read-more" href="<?php echo get_template_directory_uri(); ?>">
                         <?php echo $title; ?>
                    </a>
                </p>
            </div>
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
        </div>

    </div>
    <div class="case__more">
        Read all cases
        <a
            class="arrow-link arrow-link--small"
            href="<?php echo get_template_directory_uri(); ?>">
        </a>
    </div>
</div>