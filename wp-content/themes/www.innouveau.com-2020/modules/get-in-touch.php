<div class="get-in-touch">
    <?php
        $language = pll_current_language();

        if ($language == 'en') {
            $page_id = 69;
            $permalink = get_the_permalink($page_id);
            if (!$get_in_touch_text) {
                $get_in_touch_text = 'Like our work?';
            }
    ?>
        <a
            href="<?php echo $permalink; ?>"
            class="get-in-touch quote">
            <div class="quote__main">
                <?php echo $get_in_touch_text; ?>
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
            if (!$get_in_touch_text) {
                $get_in_touch_text = 'Meer weten?';
            }
    ?>
        <a
            href="<?php echo $permalink; ?>"
            class="get-in-touch quote">
            <div class="quote__main">

                <?php echo $get_in_touch_text; ?>
            </div>
            <div class="quote__sub">
                Bel of mail.
                <div class="arrow-link"></div>
            </div>
        </a>
    <?php
        }
    ?>
</div>

