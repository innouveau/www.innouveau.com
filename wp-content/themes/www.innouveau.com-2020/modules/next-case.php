<?php
    function get_category_id($post_id) {
        $category_ids = wp_get_post_categories($post_id);
        foreach ($category_ids as $category_id) {
            if ($category_id != 2) {
                return $category_id;
            }
        }
    }


    function getNext($post_id) {
        $category_id = get_category_id($post_id);

        $case_ids = [];
        $args = array(
            'category__and' => array(2,$category_id)
        );
        $q = new WP_Query($args);
        if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
            array_push($case_ids, get_the_ID());
        endwhile;
        wp_reset_postdata();
        endif;
        $l = count ($case_ids);
        $index = array_search($post_id, $case_ids);
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