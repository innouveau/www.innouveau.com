<?php
    $language = pll_current_language();
    if (language == 'en') {
        $page_id = 69;
        $permalink = get_the_permalink($page_id);
?>
    <a
        href="<?php echo $permalink; ?>"
        class="get-in-touch quote">
        <div class="quote__main">
            Like our work?
        </div>
        <div class="quote__sub">
            Get in touch.
            <div class="arrow-link"></div>
        </div>
    </a>
<?php

    } else {
        $page_id = 44;
        $permalink = get_the_permalink($page_id);
?>
    <a
        href="<?php echo $permalink; ?>"
        class="get-in-touch quote">
        <div class="quote__main">
            Meer weten?
        </div>
        <div class="quote__sub">
            Bel of mail.
            <div class="arrow-link"></div>
        </div>
    </a>
<?php
    }
?>

