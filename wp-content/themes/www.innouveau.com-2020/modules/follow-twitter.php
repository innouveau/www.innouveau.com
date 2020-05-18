<?php
    $language = pll_current_language();
    if (language == 'en') {
        $page_id = 69;
        $permalink = get_the_permalink($page_id);
?>
    <div class="follow-twitter">
        <div class="follow-twitter__text">
            Follow us on twitter!
        </div>
        <a href="https://twitter.com/innouveau?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @innouveau</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
<?php

    } else {
?>
    <div class="follow-twitter">
        <div class="follow-twitter__text">
            Volg ons op twitter!
        </div>
        <a href="https://twitter.com/innouveau?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @innouveau</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
<?php
    }
?>