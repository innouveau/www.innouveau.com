<?php
    $language = pll_current_language();
    if ($language == 'en') {
        $infographic_id = 223;
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
        <?php get_case(192, 1); ?>
        <?php get_case(198, 1); ?>
    </div>
</p>