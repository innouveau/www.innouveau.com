<script>
    function initMenu() {
        $('.menu__close').click(() => {
            $('.menu').removeClass('menu--active');
        });

        $('.hamburger').click(() => {
            $('.menu').addClass('menu--active');
        });
    }
</script>


<div class="menu">
    <?php
    $defaults = array(
        'theme_location'  => 'main',
        'menu'            => 'main-menu',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
     );
    wp_nav_menu( $defaults );
    ?>

    <div class="menu__close"></div>
</div>