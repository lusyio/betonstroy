<?php
/**
 * Richbee functions and definitions
 *
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );
/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style()
{
    wp_dequeue_style('storefront-style');
    wp_dequeue_style('storefront-woocommerce-style');
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
function enqueue_child_theme_styles()
{
// load bootstrap css
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/inc/assets/css/bootstrap.min.css', false, NULL, 'all');
// fontawesome cdn
    wp_enqueue_style('wp-bootstrap-pro-fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css');
// load bootstrap css
// load AItheme styles
// load WP Bootstrap Starter styles
    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri(), array('theme'));
    if (get_theme_mod('theme_option_setting') && get_theme_mod('theme_option_setting') !== 'default') {
        wp_enqueue_style('wp-bootstrap-starter-' . get_theme_mod('theme_option_setting'), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/' . get_theme_mod('theme_option_setting') . '.css', false, '');
    }
    wp_enqueue_style('wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap');

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

// load swiper js and css
    wp_enqueue_script('wp-swiper-js', get_stylesheet_directory_uri() . '/inc/assets/js/swiper.min.js', array(), '');
    wp_enqueue_style('wp-swiper-css', get_stylesheet_directory_uri() . '/inc/assets/css/swiper.min.css', array(), '');

// load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_stylesheet_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_stylesheet_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_stylesheet_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_stylesheet_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
//enqueue my child theme stylesheet
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('theme'));
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

remove_action('wp_head', 'feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head', 'feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head', 'rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head', 'wp_generator');  // скрыть версию wordpress

/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('wp_bootstrap_navwalker')) {
    require_once(get_stylesheet_directory() . '/inc/wp_bootstrap_navwalker.php');
}

/**
 * Удаление json-api ссылок
 */
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11);

/**
 * Cкрываем разные линки при отображении постов блога (следующий, предыдущий, короткий url)
 */
remove_action('wp_head', 'start_post_rel_link', 10);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'wp_shortlink_wp_head', 10);

/**
 * `Disable Emojis` Plugin Version: 1.7.2
 */
if ('Отключаем Emojis в WordPress') {

    /**
     * Disable the emoji's
     */
    function disable_emojis()
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
        add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
    }

    add_action('init', 'disable_emojis');

    /**
     * Filter function used to remove the tinymce emoji plugin.
     *
     * @param array $plugins
     * @return   array             Difference betwen the two arrays
     */
    function disable_emojis_tinymce($plugins)
    {
        if (is_array($plugins)) {
            return array_diff($plugins, array('wpemoji'));
        }

        return array();
    }

    /**
     * Remove emoji CDN hostname from DNS prefetching hints.
     *
     * @param array $urls URLs to print for resource hints.
     * @param string $relation_type The relation type the URLs are printed for.
     * @return array                 Difference betwen the two arrays.
     */
    function disable_emojis_remove_dns_prefetch($urls, $relation_type)
    {

        if ('dns-prefetch' == $relation_type) {

            // Strip out any URLs referencing the WordPress.org emoji location
            $emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
            foreach ($urls as $key => $url) {
                if (strpos($url, $emoji_svg_url_bit) !== false) {
                    unset($urls[$key]);
                }
            }

        }

        return $urls;
    }

}

/**
 * Удаляем стили для recentcomments из header'а
 */
function remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}

add_action('widgets_init', 'remove_recent_comments_style');

/**
 * Удаляем ссылку на xmlrpc.php из header'а
 */
remove_action('wp_head', 'wp_bootstrap_starter_pingback_header');

/**
 * Удаляем стили для #page-sub-header из  header'а
 */
remove_action('wp_head', 'wp_bootstrap_starter_customizer_css');

/*
*Обновление количества товара
*/
add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment($fragments)
{
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}

/**
 * Замена надписи на кнопке Добавить в корзину
 */
add_filter('woocommerce_product_single_add_to_cart_text', 'woocust_change_label_button_add_to_cart_single');
function woocust_change_label_button_add_to_cart_single($label)
{

    $label = 'Добавить в корзину';

    return $label;
}

/**
 * Удаляем поля адрес и телефон, если нет доставки
 */

add_filter('woocommerce_checkout_fields', 'new_woocommerce_checkout_fields', 10, 1);

function new_woocommerce_checkout_fields($fields)
{
    if (!WC()->cart->needs_shipping()) {
        unset($fields['billing']['billing_address_1']); //удаляем Населённый пункт
        unset($fields['billing']['billing_address_2']); //удаляем Населённый пункт
        unset($fields['billing']['billing_city']); //удаляем Населённый пункт
        unset($fields['billing']['billing_postcode']); //удаляем Населённый пункт
        unset($fields['billing']['billing_country']); //удаляем Населённый пункт
        unset($fields['billing']['billing_state']); //удаляем Населённый пункт
        unset($fields['billing']['billing_company']); //удаляем Населённый пункт
        unset($fields['billing']['phone']); //удаляем Населённый пункт

    }
    return $fields;
}

remove_action('storefront_footer', 'storefront_credit', 20);

/**
 * Remove product data tabs
 */
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs)
{

    unset($tabs['description']);        // Remove the description tab
    unset($tabs['reviews']);            // Remove the reviews tab
    unset($tabs['additional_information']);    // Remove the additional information tab

    return $tabs;
}

//Количество товаров для вывода на странице магазина
add_filter('loop_shop_per_page', 'wg_view_all_products');

function wg_view_all_products()
{
    return '9999';
}

//Удаление сортировки
add_action('init', 'bbloomer_delay_remove');

function bbloomer_delay_remove()
{
    remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);

}

/*
*Изменение количетсва товара на строку на страницах woo
*/
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 3; // 3 products per row
    }
}


//Удаление сторфронт-кредит
add_action('init', 'custom_remove_footer_credit', 10);

function custom_remove_footer_credit()
{
    remove_action('storefront_footer', 'storefront_credit', 20);
    add_action('storefront_footer', 'custom_storefront_credit', 20);
}


//Добавление favicon
function favicon_link()
{
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />' . "\n";
}

add_action('wp_head', 'favicon_link');

//Изменение entry-content
function storefront_page_content()
{
    ?>
    <div class="row">
        <?php the_content(); ?>
        <?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:', 'storefront'),
                'after' => '</div>',
            )
        );
        ?>
    </div>
    <?php
}

add_filter('woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3);
function my_custom_sale_flash($text, $post, $_product)
{
    return '<span class="onsale">SALE!</span>';
}

// Колонки related
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args');
function jk_related_products_args($args)
{
    $args['posts_per_page'] = 6; // количество "Похожих товаров"
    $args['columns'] = 4; // количество колонок
    return $args;
}

add_action('init', 'storefront_remove_storefront_breadcrumbs');

function storefront_remove_storefront_breadcrumbs()
{
    remove_action('storefront_before_content', 'woocommerce_breadcrumb', 10);
}

function add_help_banner($title = 'Не можете определиться?')
{
    $modal = '';
    $title
        ? $modal = '#helpModal'
        : $modal = '#questionModal';
    return
        '<div class="bg-blue help-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12 help-banner-left">
                        <p class="help-banner__header">' . $title . '</p>
                        <p class="help-banner__after-header">Проконсультируем и подберем необходимую продукцию</p>
                        <button data-toggle="modal" data-target="' . $modal . '" class="btn btn-outline-white">Получить консультацию</button>
                        <p class="help-banner__info">*Отправляя свои данные, вы соглашаетесь на обработку персональных данных</p>
                    </div>
                    <div class="col-lg-5 col-12 pl-0 m-auto">
                        <img src="/wp-content/themes/storefront-child/images/img-help-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>';
}

function get_products_by_category_slug($slug)
{
    $args = array(
        'category' => array($slug),
    );
    $products = wc_get_products($args);
    ob_start();
    ?>
    <div class="bg-grey products-list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="products-list__header">Каталог продукции</p>
                    <p class="products-list__after-header">Готовая бетонная смесь на гравийном/гранитном щебне</p>
                </div>
            </div>
            <div class="row">
                <?php
                foreach (array_reverse($products) as $product):
                    $durability = mb_strtolower(get_post_meta($product->get_id(), 'durability', true));
                    $density = get_post_meta($product->get_id(), 'density', true);
                    $props = get_post_meta($product->get_id(), 'properties', true);
                    $image_id = $product->get_image_id();
                    $properties = [];
                    $icon = '';
                    if ($durability) {
                        switch ($durability) {
                            case 'пластичный':
                                $icon = '/wp-content/themes/storefront-child/svg/пластичный.svg';
                                $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $durability . '">' . $durability . '</span>';
                                break;
                            case 'высокооднородный':
                                $icon = '/wp-content/themes/storefront-child/svg/Высокооднородный.svg';
                                $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $durability . '">' . $durability . '</span>';
                                break;
                            case 'низкая прочность':
                                $icon = '/wp-content/themes/storefront-child/svg/низкая прочность.svg';
                                $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $durability . '">' . $durability . '</span>';
                                break;
                            case 'средняя прочность':
                                $icon = '/wp-content/themes/storefront-child/svg/средняя прочность.svg';
                                $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $durability . '">' . $durability . '</span>';
                                break;
                            case 'высокая прочность':
                                $icon = '/wp-content/themes/storefront-child/svg/высокая прочность.svg';
                                $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $durability . '">' . $durability . '</span>';
                                break;
                            case 'повышенная прочность':
                                $icon = '/wp-content/themes/storefront-child/svg/повышенная прочность.svg';
                                $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $durability . '">' . $durability . '</span>';
                                break;
                            case 'экстремальная прочность' :
                                $icon = '/wp-content/themes/storefront-child/svg/экстремальная прочность.svg';
                                $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $durability . '">' . $durability . '</span>';
                                break;
                        }
                    }
                    if ($density) {
                        $icon = '/wp-content/themes/storefront-child/svg/Плотность.svg';
                        $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="плотность">плотность ' . $density . ' кг/м³</span>';
                    }
                    if (is_array($props)) {
                        foreach ($props as $prop) {
                            $lowerProp = mb_strtolower($prop);
                            switch ($lowerProp) {
                                case 'подготовка фундамента':
                                case 'подготовительные работы':
                                    $icon = '/wp-content/themes/storefront-child/svg/Подготовительные работы.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'для стяжек':
                                    $icon = '/wp-content/themes/storefront-child/svg/Стяжка.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'для заливки фундамента':
                                    $icon = '/wp-content/themes/storefront-child/svg/Заливка бетона.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'несущие конструкции':
                                    $icon = '/wp-content/themes/storefront-child/svg/Несущие конструкции.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'монолитный фундамент':
                                case 'изготовление фундамента':
                                    $icon = '/wp-content/themes/storefront-child/svg/Монолитный фундамент.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'для жби':
                                    $icon = '/wp-content/themes/storefront-child/svg/ЖБИ.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'ответственные конструкции':
                                    $icon = '/wp-content/themes/storefront-child/svg/Важные конструкции.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'для кладки':
                                    $icon = '/wp-content/themes/storefront-child/svg/Для кладки.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'для выравнивания':
                                    $icon = '/wp-content/themes/storefront-child/svg/Выравнивание.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                                case 'для затирки':
                                    $icon = '/wp-content/themes/storefront-child/svg/Для затирки.svg';
                                    $properties[] = '<span class="card-products-list__property"><img src="' . $icon . '" alt="' . $lowerProp . '">' . $lowerProp . '</span>';
                                    break;
                            }
                        }
                    }
                    ?>
                    <div class="col-lg-6 col-12">
                        <div class="card-products-list">
                            <div class="card-products-list__header">
                                <div>
                                    <p class="card-products-list__title"><?= $product->name; ?></p>
                                    <?php foreach ($properties as $property) {
                                        echo $property;
                                    } ?>
                                </div>
                                <img src="<?= wp_get_attachment_image_url($image_id, 'full'); ?>"
                                     alt="<?= $product->name; ?>">
                            </div>
                            <div class="card-products-list__body">
                                <p class="card-products-list__price"><?= $product->get_price(); ?> ₽/м³</p>
                                <div class="card-products-list__btns">
                                    <button class="btn btn-primary">Оставить заявку</button>
                                    <button class="btn btn-outline-primary openNav">Расчет стоимости ></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-lg-6 col-12">
                    <div class="card-products-list">
                        <div class="card-products-list__header d-block card-products-list-discount border-0">
                            <div class="d-flex">
                                <div style="margin-right: 25px;">
                                    <p class="card-products-list__title">Получите каталог в 2 клика</p>
                                    <p>Каталог даст доступ к ценам со скидкой до 15%</p>
                                </div>
                                <img src="/wp-content/themes/storefront-child/svg/svg-discount.svg" alt="">
                            </div>
                            <?= do_shortcode('[caldera_form id="CF5ec699f132044"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

function get_product_titles_by_category($slug)
{
    $args = array(
        'category' => array($slug),
    );
    $products = wc_get_products($args);
    $titles = [];
    foreach (array_reverse($products) as $productKey => $product) {
        if ($productKey === array_key_last($products)) {
            $comma = '';
        } else {
            $comma = ', ';
        }
        $titles[] = $product->name . $comma;
    }
    return implode($titles);
}

function get_post_gallery_images_with_info($postvar = NULL, $pos = 0)
{
    if (!isset($postvar)) {
        global $post;
        $postvar = $post;
    }
    $post_content = $postvar->post_content;
    if ($pos) {
        $post_content = preg_split('~\(:\)~', $post_content)[1];
    }
    preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
    $images_id = explode(",", $ids[1]);
    $image_gallery_with_info = array();
    foreach ($images_id as $image_id) {
        $attachment = get_post($image_id);
        array_push($image_gallery_with_info, array(
                'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
                'caption' => $attachment->post_excerpt,
                'description' => $attachment->post_content,
                'href' => get_permalink($attachment->ID),
                'src' => $attachment->guid,
                'title' => $attachment->post_title
            )
        );
    }
    return $image_gallery_with_info;
}
