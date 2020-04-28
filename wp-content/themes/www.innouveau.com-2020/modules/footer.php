<div class="footer">
    <div class="pagewrap">
        <div class="footer__row">
            <div class="footer__col">
                <h3>Menu</h3>
                <?php
            $defaults = array(
                'theme_location'  => 'main',
                'menu'            => 'main-menu',
                'container'       => 'div',
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

            </div>

            <div class="footer__col">
                <h3>Contact</h3>
                <a href="mailto:info@innouveau.nl">info@innouveau.n</a>
                <br><br>
                <b>Bezoekadres</b><br>
                Innouveau<br>
                Weg en Bos 9D<br>
                2661 DG Bergschenhoek
                <br><br>
                <b>Postadres</b><br>
                Innouveau<br>
                Prins Hendrikstraat 13D<br>
                3071 LG Rotterdam
            </div>

            <div class="footer__col">
                <h3>Officiële gegevens</h3>
                <table class="contact-info-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>KvK</td>
                        <td>61118389</td>
                    </tr>
                    <tr>
                        <td>Bank</td>
                        <td>NL30TRIO0338767924</td>
                    </tr>
                    <tr>
                        <td>BIC</td>
                        <td>INGBNL2A</td>
                    </tr>
                    <tr>
                        <td>BTW</td>
                        <td>NL854214902B01</td>
                    </tr>
                </table>

                <br><br>
                <?php include('php/terms.php'); ?>
            </div>

            <div class="footer__col">
                <h3>Social media</h3>
                <?php include('php/social-media.php'); ?>
            </div>

            <div class="footer__col">
                <h3>Interesse?</h3>
                Bel of mail voor een
                vrijblijvende afspraak<br>
                Jeroen Breen<br>
                06 4418 5517<br>
                <a href="mailto:jeroen@innouveau.nl">jeroen@innouveau.nl</a>
            </div>
        </div>
    </div>
</div>