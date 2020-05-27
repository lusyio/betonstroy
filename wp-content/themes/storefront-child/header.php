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
            $widget = '<div class="container">
            <div class="header-cards container">
                <div class="header-card type-1">
                    <img src="/wp-content/themes/storefront-child/svg/Завод.svg" alt="">
                    <p class="header-card__title">Мы производим</p>
                    <p class="header-card__text">цементный раствор, бетонные смеси всех классов на гравийном и гранитном
                        щебне</p>
                    <a class="header-card__link" href="/#products">Продукция ></a>
                </div>
                <div class="header-card type-2">
                    <img src="/wp-content/themes/storefront-child/svg/Доверие.svg" alt="">
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
            </div>';
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
                <div class="col-lg-3 col-12 header-card-products">
                    <img src="/wp-content/themes/storefront-child/svg/svg-storage.svg" alt="">
                    <p class="header-card-products__title">10 000 м³</p>
                    <p>расходников на складе</p>
                </div>
                <div class="col-lg-3 col-12 header-card-products">
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
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-xl p-0 justify-content-between">
                    <div class="navbar-brand">
                        <a class="navbar-brand__link" href="/">
                            <img src="/wp-content/themes/storefront-child/svg/Местоположение.svg" alt="">
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
            <h1 class="header-h1 h<?=$title_size ? $title_size : 110 ?>"><?= get_field('header_title') ?></h1>
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
