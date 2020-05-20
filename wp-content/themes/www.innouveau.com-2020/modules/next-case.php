<?php
    function getNext($exclude) {
        $case_ids = [];
        $args = array(
            'category__and' => array(2,22)
        );
        $q = new WP_Query($args);
        if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
            array_push($case_ids, get_the_ID());
        endwhile;
        wp_reset_postdata();
        endif;
        $l = count ($case_ids);
        $index = array_search($exclude, $case_ids);
        if ($index === FALSE) {
            return null;
        } else {
            if ($index == ($l - 1)) {
                return $case_ids[0];
            } else {

                return $case_ids[$index + 1];
            }
        }
    }

    $post_id = get_the_ID();
    $next_id = getNext($post_id);
    $next_permalink = get_the_permalink($next_id);
    $next_title = get_the_title($next_id);



?>

<a
    href="<?php echo $next_permalink; ?>"
    class="next-case">
    <div class="next-case__tool">
        →
    </div>
    <div class="next-case__label">

        Volgende case:
        <div class="next-case__label-case-title">
            <?php echo $next_title; ?>
        </div>
    </div>
</a>