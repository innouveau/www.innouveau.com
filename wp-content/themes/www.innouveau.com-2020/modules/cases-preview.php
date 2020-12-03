<?php
    $language = pll_current_language();
    if ($language == 'en') {
        $read_all_text = 'Read all cases';
        $highlighted_case_id = 344;
    } else {
        $read_all_text = 'Bekijk alle projecten';
        $highlighted_case_id = 12;
    }
?>

<div class="cases-preview">
    <div class="case__container">
        <?php echo get_case($highlighted_case_id, 3); ?>
    </div>
    <a
        href="<?php echo get_the_permalink($cases_id); ?>"
        class="case__more">
        <?php echo $read_all_text; ?><br>
        <div class="arrow-link arrow-link--small"></div>
    </a>
</div>