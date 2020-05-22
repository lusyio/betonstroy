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

<div class="modal fade modal-primary" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-primary__close" data-dismiss="modal">
                    <img src="/wp-content/themes/storefront-child/svg/svg-close-modal.svg" alt="">
                </div>
                <p class="modal-primary__title">Задайте интересующий вопрос</p>
                <p class="modal-primary__info">Мы скоро перезвоним. Обычно это занимает 5-10 минут, в зависимости от
                    загрузки операторов</p>
                <div class="modal-primary-form">
                    <?= do_shortcode('[caldera_form id="CF5ec6726734070"]') ?>
                </div>
                <p class="modal-primary__call">или перезвоните по телефону:</p>
                <a class="modal-primary__phone" href="tel:79097007070">+7 (909) 700-70-70</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-primary thank-you" id="thankYouCatalog" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-primary__close" data-dismiss="modal">
                    <img src="/wp-content/themes/storefront-child/svg/svg-close-modal.svg" alt="">
                </div>
                <p class="modal-primary__title">Ваша заявка принята! <br> Мы скоро вышлем каталог</p>
                <p class="modal-primary__info">Обычно это занимает 5-10 минут, в зависимости от загрузки операторов</p>
                <p class="modal-primary__call">или перезвоните по телефону:</p>
                <a class="modal-primary__phone" href="tel:79097007070">+7 (909) 700-70-70</a>
                <p class="modal-primary__wait">в ожидании ответа Вам может быть интересны:</p>
                <p class="modal-primary__wait-link">
                    <a href="/#products">продукция</a>
                    <a href="/about/#passports">сертификаты</a>
                    <a href="/about">о компании</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-primary thank-you" id="thankYou" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-primary__close" data-dismiss="modal">
                    <img src="/wp-content/themes/storefront-child/svg/svg-close-modal.svg" alt="">
                </div>
                <p class="modal-primary__title">Ваша заявка принята! <br> Мы скоро ответим</p>
                <p class="modal-primary__info">Обычно это занимает 5-10 минут, в зависимости от загрузки операторов</p>
                <p class="modal-primary__call">или перезвоните по телефону:</p>
                <a class="modal-primary__phone" href="tel:79097007070">+7 (909) 700-70-70</a>
                <p class="modal-primary__wait">в ожидании ответа Вам может быть интересны:</p>
                <p class="modal-primary__wait-link">
                    <a href="/#products">продукция</a>
                    <a href="/about/#passports">сертификаты</a>
                    <a href="/about">о компании</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-primary" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-primary__close" data-dismiss="modal">
                    <img src="/wp-content/themes/storefront-child/svg/svg-close-modal.svg" alt="">
                </div>
                <p class="modal-primary__title">Не можете определиться?</p>
                <p class="modal-primary__info">Проконсультируем и подберем необходимую продукцию</p>
                <div class="modal-primary-form">
                    <?= do_shortcode('[caldera_form id="CF5ec6726734070"]') ?>
                </div>
                <p class="modal-primary__call">или перезвоните по телефону:</p>
                <a class="modal-primary__phone" href="tel:79097007070">+7 (909) 700-70-70</a>
            </div>
        </div>
    </div>
</div>

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
                <div class="footer-menu">
                    <ul id="menu-second" class="menu">
                        <?php
                        $menu_name = 'second';
                        $menu = wp_get_nav_menu_object($menu_name);
                        $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

                        $count = 0;
                        $submenu = false;

                        foreach ($menuitems as $item):

                            $link = $item->url;
                            $title = $item->title;
                            // item does not have a parent so menu_item_parent equals 0 (false)
                            if (!$item->menu_item_parent):

                                // save this id for later comparison with sub-menu items
                                $parent_id = $item->ID;
                                ?>

                                <li class="item mb-lg-3 mb-3">
                                <a href="<?php echo $link; ?>" class="title">
                                    <?php echo $title; ?>
                                </a>
                            <?php endif; ?>

                            <?php if ($parent_id == $item->menu_item_parent): ?>

                            <?php if (!$submenu): $submenu = true; ?>
                                <ul class="sub-menu">
                            <?php endif; ?>

                            <li class="item">
                                <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                            </li>

                            <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id && $submenu): ?>
                                </ul>
                                <?php $submenu = false; endif; ?>

                        <?php endif; ?>

                            <?php if ($menuitems[$count + 1]->menu_item_parent != $parent_id): ?>
                            </li>
                            <?php $submenu = false; endif; ?>

                            <?php $count++; endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="footer-socials">
                    <p class="footer-contacts">Наши контакты</p>
                    <a href="tel:<?= get_field('general_phone', 44) ?>"><?= get_field('general_phone', 44) ?></a>
                    <a href="mailto:<?= get_field('general_email', 44) ?>"><?= get_field('general_email', 44) ?></a>
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
                    <p class="mb-0 with-love">Сделано с любовью в <a target="_blank" href="http://yurin.biz/">Студии
                            Юрина</a></p>
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

<script>
    jQuery(function ($) {
        $(document).ready(function () {
            let pathArray = window.location.pathname.split('/');
            let secondLevelLocation = pathArray[1];
            if (secondLevelLocation === 'gotovaya-betonnaya-smes' || secondLevelLocation === 'czementnyj-kladochnyj-rastvor') {
                $('#menu-item-57').removeClass('hide-active').addClass('active')
            }
        })
        $('.caldera-grid form').on('submit', function () {
            $('.modal-primary').modal('hide')
            $('#thankYou').modal('show')
        })

        const $page = $('html, body');
        $('a[href*="#"]').on('click', function () {
            let blockId = $.attr(this, 'href').replace('/', '');
            $page.animate({
                scrollTop: $(`${blockId}`).offset().top - 30
            }, 1000);
            return false;
        });
    })
</script>

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
