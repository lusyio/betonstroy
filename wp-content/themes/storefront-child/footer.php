<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .row -->
</div><!-- .container -->

<?php do_action('storefront_before_footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center col-lg-4 text-lg-left footer-logo mb-lg-0 mb-4">
                <div class="site-info">
                    <a class="site-title"
                       href="<?php echo esc_url(home_url('/')); ?>">
                        <p class="site-title__a"><?php esc_url(bloginfo('name')); ?></p>
                        <p class="site-description"><?php bloginfo('description'); ?></p>
                    </a>
                    <p class="mb-0 footer-credits d-lg-block d-none">
                        <a class="credits" href="https://richbee.ru/" target="_blank"><img
                                    src="/wp-content/themes/storefront-child/svg/Richbee-black.svg" alt=""></a>
                    </p>

                </div><!-- close .site-info -->
            </div>
            <div class="col-12 col-lg-5">
                <?php
                if ($menu_items = wp_get_nav_menu_items('second')) {
                    echo '<div class="footer-menu">';
                    echo '<ul class="menu" id="menu-second">';
                    foreach ((array)$menu_items as $key => $menu_item) {
                        $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                        $url = $menu_item->url; // URL ссылки
                        echo '<li class="mb-lg-3 mb-3"><a href="' . $url . '">' . $title . '</a></li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-12 col-lg-3">
                <div class="footer-socials">
                    <p class="footer-contacts">Наши контакты</p>
                    <a href="tel:+74957732353">+7 (495) 773-23-53</a>
                    <a href="mailto:example@mail.ru">example@mail.ru</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="footer-hr">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between">
                    <p class="footer-name-p">
                        &copy; 2012 - <?= date('Y'); ?> <?= get_bloginfo('name') ?>
                    </p>
                    <p class="mb-0 with-love">Сделано с любовью в <a href="#">Студии Юрина</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="col-full">

        <?php
        /**
         * Functions hooked in to storefront_footer action
         *
         * @hooked storefront_footer_widgets - 10
         * @hooked storefront_credit         - 20
         */
        do_action('storefront_footer');
        ?>

    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
