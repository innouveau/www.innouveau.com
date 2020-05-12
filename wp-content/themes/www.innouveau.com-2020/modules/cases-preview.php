<?php
    $case_id = 12;
?>

<div class="cases">
    <div class="case__container">
        <?php get_case($case_id); ?>

    </div>
    <div class="case__more">
        Read all cases
        <a
            class="arrow-link arrow-link--small"
            href="<?php echo get_template_directory_uri(); ?>">
        </a>
    </div>
</div>