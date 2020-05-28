<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_front_page()) : ?>
        <title>ООО "Бетонстрой" - доставка и производство бетона в Сергиевом Посаде</title>
    <?php endif; ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <meta property="og:image" content="/wp-content/themes/storefront-child/open-graph-img.jpg"/>
    <meta property="og:title" content='ООО "Бетонстрой" - производство бетона в Сергиевом Посаде'/>
    <meta property="og:description"
          content='Доставка и производство бетонной смеси и цементно кладочного раствора. Производство в Сергиевом Посаде'/>
</head>

<body <?php body_class(); ?>>

<?php do_action('storefront_before_site'); ?>

<div id="page" class="hfeed site">
    <?php
    $header_bg = get_field('header_bg');
    $header_size = get_field('header_size');
    $widget_type = get_field('widget_type');
    $title_size = get_field('title_size');
    $widget = '';
    $after_header = null;


    $page_slug = $post->post_name;

    switch ($widget_type) {
        case 'type_1':
            $widget = '
            <div class="header-cards container">
                <div class="header-card type-1">
                    <img src="/wp-content/themes/storefront-child/svg/Zavod.svg" alt="">
                    <p class="header-card__title">Мы производим</p>
                    <p class="header-card__text">цементный раствор, бетонные смеси всех классов на гравийном и гранитном
                        щебне</p>
                    <a class="header-card__link" href="/#products">Продукция ></a>
                </div>
                <div class="header-card type-2">
                    <img src="/wp-content/themes/storefront-child/svg/Doverie.svg" alt="">
                    <p class="header-card__title">156 компаний</p>
                    <p class="header-card__text">доверяют нашей продукции</p>
                    <a class="header-card__link" href="/about">О компании ></a>
                </div>
                <div class="header-card type-3">
                    <p class="header-card__title">Быстрый расчет стоимости заказа</p>
                    <p class="header-card__text">Мы перезвоним в течении 5 минут</p>
                    ' . do_shortcode("[caldera_form id=\"CF5ec66084d9ee4\"]") . '
                </div>
                </div>
           ';
            break;
        case 'type_2':
            $after_header = '<p class="header-products-list">Классы ' . get_product_titles_by_category($page_slug) . '</p>
            <div class="row">
                <div class="col-lg-3 col-6 header-card-products">
                    <img src="/wp-content/themes/storefront-child/svg/svg-storage.svg" alt="">
                    <p class="header-card-products__title">10 000 м³</p>
                    <p>расходников на складе</p>
                </div>
                <div class="col-lg-3 col-6 header-card-products">
                    <img src="/wp-content/themes/storefront-child/svg/svg-header-discount.svg" alt="">
                    <p class="header-card-products__title">на 12 %</p>
                    <p>дешевле рынка</p>
                </div>
            </div>';
            $widget = '<div class="bg-blue header-widget-catalog">
            <div class="container">
                <p class="header-widget-catalog__title">Получите каталог продукции за 3 клика</p>
                <p class="header-widget-catalog__info">Каталог даст доступ к ценам со скидкой до 15%</p>
             
                       ' . do_shortcode("[caldera_form id=\"CF5ec6632547f29\"]") . '
       
            </div>
        </div>';
            break;
        case 'type_3':
            $after_header = '<p class="header-products-list">Классы ' . get_product_titles_by_category($page_slug) . '</p>
            <div class="row">
                <div class="col-lg-3 col-6 header-card-products">
                    <img src="/wp-content/themes/storefront-child/svg/svg-storage.svg" alt="">
                    <p class="header-card-products__title">10 000 м³</p>
                    <p>расходников на складе</p>
                </div>
                <div class="col-lg-3 col-6 header-card-products">
                    <img src="/wp-content/themes/storefront-child/svg/10min.svg" alt="">
                    <p class="header-card-products__title">За 10 минут</p>
                    <p>до нужного времени поставки <br> уже будем на месте</p>
                </div>
            </div>';
            $widget = '<div class="bg-blue header-widget-catalog">
            <div class="container">
                <p class="header-widget-catalog__title">Получите каталог продукции за 3 клика</p>
                <p class="header-widget-catalog__info">Каталог даст доступ к ценам со скидкой до 15%</p>
             
                       ' . do_shortcode("[caldera_form id=\"CF5ec6632547f29\"]") . '
       
            </div>
        </div>';
            break;
        case 'none':
            $widget = null;
            break;
    }
    ?>
    <?php do_action('storefront_before_header'); ?>
    <div class="header-bg position-relative"
         style="height: <?= $header_size === 'big' ? 900 : 633 ?>px;background-image: url(<?= $header_bg ? $header_bg : '/wp-content/themes/storefront-child/images/bg-main.jpg' ?>);">

        <header id="masthead" class="site-header" role="banner">
            <div class="container masthead-container">
                <nav class="navbar navbar-dark navbar-expand-xl p-0 justify-content-between">
                    <div class="navbar-brand">
                        <a class="navbar-brand__link" href="/">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.5">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.2 8.09956C8.4557 8.09956 7.85 7.49386 7.85 6.74956C7.85 6.00526 8.4557 5.39956 9.2 5.39956C9.9443 5.39956 10.55 6.00526 10.55 6.74956C10.55 7.49386 9.9443 8.09956 9.2 8.09956ZM9.2 3.59956C7.463 3.59956 6.05 5.01256 6.05 6.74956C6.05 8.48656 7.463 9.89956 9.2 9.89956C10.937 9.89956 12.35 8.48656 12.35 6.74956C12.35 5.01256 10.937 3.59956 9.2 3.59956ZM9.2 15.8814C7.6925 14.4558 3.8 10.4535 3.8 7.1298C3.8 4.1913 6.2219 1.8 9.2 1.8C12.1781 1.8 14.6 4.1913 14.6 7.1298C14.6 10.4535 10.7075 14.4558 9.2 15.8814ZM9.2 0C5.2301 0 2 3.1977 2 7.1298C2 12.0573 8.3441 17.5509 8.6141 17.7822C8.7833 17.9271 8.9912 18 9.2 18C9.4088 18 9.6167 17.9271 9.7859 17.7822C10.0559 17.5509 16.4 12.0573 16.4 7.1298C16.4 3.1977 13.1699 0 9.2 0Z" fill="#C4C4C4"/>
                                </g>
                            </svg>

                            <p>
                                <span>Производство в</span>
                                Сергиевом Посаде
                            </p>
                        </a>
                    </div>

                    <div class="d-flex">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => '',
                            'container_class' => 'collapse navbar-collapse justify-content-end mr-3',
                            'menu_id' => false,
                            'menu_class' => 'navbar-nav',
                            'depth' => 3,
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>
                        <div class="outer-menu">
                            <button class="navbar-toggler position-relative" type="button" style="z-index: 1">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <input class="checkbox-toggle" data-toggle="collapse" data-target="#main-nav"
                                   aria-controls="" aria-expanded="false" aria-label="Toggle navigation"
                                   type="checkbox"/>
                            <div class="menu">
                                <div>
                                    <div class="border-header">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'container' => 'div',
                                            'container_id' => 'main-nav',
                                            'container_class' => 'collapse navbar-collapse justify-content-end',
                                            'menu_id' => false,
                                            'menu_class' => 'navbar-nav',
                                            'depth' => 3,
                                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                            'walker' => new wp_bootstrap_navwalker()
                                        ));
                                        ?>
                                        <a class="header-phone-mobile"
                                           href="tel:<?= get_field('general_phone', 44) ?>"><?= get_field('general_phone', 44) ?></a>
                                        <a data-toggle="modal" data-target="#questionModal" class="btn btn-primary" href="">Оставить заявку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="header-phone"
                       href="tel:<?= get_field('general_phone', 44) ?>"><?= get_field('general_phone', 44) ?></a>
                </nav>
            </div>

        </header><!-- #masthead -->
        <div class="container">
            <h1 class="header-h1 h<?= $title_size ? $title_size : 110 ?>"><?= get_field('header_title') ?></h1>
            <?= $after_header ?>
        </div>
        <?= $widget ?>

    </div>


    <?php
    /**
     * Functions hooked in to storefront_before_content
     *
     * @hooked storefront_header_widget_region - 10
     * @hooked woocommerce_breadcrumb - 10
     */
    do_action('storefront_before_content');
    ?>

    <div id="content" class="site-content">
        <div class="container">
            <div class="row">

<?php
do_action('storefront_content_top');
