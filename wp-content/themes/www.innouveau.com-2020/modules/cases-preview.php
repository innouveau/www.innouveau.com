<?php
    $language = pll_current_language();
    if ($language == 'en') {
        $highlighted_case_id = 344;
    } else {
        $highlighted_case_id = 12;
    }
?>

<div class="cases-preview">
    <div class="case__container">
        <?php get_case($highlighted_case_id, 3); ?>
    </div>
    <a
        href="<?php echo get_the_permalink($cases_id); ?>"
        class="case__more">
        Read all cases
        <div class="arrow-link arrow-link--small"></div>
    </a>
</div>