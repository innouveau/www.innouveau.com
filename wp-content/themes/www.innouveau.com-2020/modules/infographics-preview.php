<?php
    $language = pll_current_language();
    if ($language == 'en') {
        $infographic_id = 223;
        $infographic_case_1 = 309;
        $infographic_case_2 = 305;
        $permalink = get_the_permalink($infographic_id);
?>
    <p>
       Innouveau also creates awesome interactive infographics.<br>
       Read more about our
       <a href="<?php echo $permalink; ?>">infographics</a>.
    </p>
<?php
    } else {
        $infographic_id = 220;
        $infographic_case_1 = 192;
        $infographic_case_2 = 198;
        $permalink = get_the_permalink($infographic_id);
?>
    <p>
       Innouveau maakt ook interactieve infographics.<br>
       Lees meer over onze
       <a href="<?php echo $permalink; ?>">infographics</a>.
    </p>
<?php
    }
?>


<p>
    <div class="cases cases--home">
        <?php get_case($infographic_case_1, 1); ?>
        <?php get_case($infographic_case_2, 1); ?>
    </div>
</p>