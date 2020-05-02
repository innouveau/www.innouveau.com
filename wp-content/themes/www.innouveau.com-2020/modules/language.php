<div class="languages">
        <?php
            $languages = pll_the_languages(array('raw'=>1));
            $i = 0;
            foreach ($languages as $language) {
                echo '<a class="language';
                if ($language['current_lang']) {
                    echo ' language--current';
                }
                echo '" href="' . $language['url'] . '">' . $language['slug'] . '</a>';
                if ($i < count($languages) - 1) {
                    echo '<div class="language__divider">/</div>';
                }
                $i++;
            }
        ?>
</div>