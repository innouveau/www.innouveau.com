<div class="get-in-touch">
    <?php
        $language = pll_current_language();

        if ($language == 'en') {
            if (!$get_in_touch_text) {
                $get_in_touch_text = 'Like our work?';
            }
    ?>
        <div
            class="get-in-touch quote">
            <div class="quote__main">
                <?php echo $get_in_touch_text; ?>
            </div>
            <div class="quote__sub">
                Get in touch.
            </div>
        </div>
        <div class="get-in-touch__employee">
            <?php echo get_employee($employee_id); ?>
        </div>
    <?php

        } else {
            if (!$get_in_touch_text) {
                $get_in_touch_text = 'Meer weten?';
            }
    ?>
        <div
            href="<?php echo $permalink; ?>"
            class="get-in-touch quote">
            <div class="quote__main">
                <?php echo $get_in_touch_text; ?>
            </div>
            <div class="quote__sub">
                Neem contact op:
            </div>
        </div>
        <div class="get-in-touch__employee">
            <?php echo get_employee($employee_id); ?>
        </div>
    <?php
        }
    ?>
</div>

