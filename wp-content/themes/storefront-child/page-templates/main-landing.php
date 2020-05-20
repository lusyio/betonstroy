<?php
/*
Template Name: main-landing
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>


</div>
</div>
<div class="bg-grey main-products">
    <div class="container">
        <div class="row main-products__header">
            <div class="col-12">
                <p id="products" class="main-products__title">Продукция</p>
                <p class="main-products__after-title">В соответствии с ГОСТ 7473-2010</p>
            </div>
        </div>
        <div class="row">
            <?php
            $orderby = 'name';
            $order = 'asc';
            $hide_empty = true;
            $cat_args = array(
                'orderby' => $orderby,
                'order' => $order,
                'hide_empty' => $hide_empty,
            );

            $product_categories = get_terms('product_cat', $cat_args);

            if (!empty($product_categories)) :

                foreach ($product_categories as $key => $category):
                    ?>
                    <div class="col-lg-6 col-12 card-product-col">
                        <div class="card-product">
                            <div class="card-product__header">
                                <p class="card-product__title"><?= $category->name ?></p>
                                <p class="card-product__marks">
                                    <img src="/wp-content/themes/storefront-child/svg/svg-mark.svg" alt="mark">
                                    <?= get_product_titles_by_category($category->slug) ?>
                                </p>
                            </div>
                            <div class="card-product__body">
                                <div class="card-product-item">
                                    <a href="/<?= $category->slug; ?>">
                                        <img src="/wp-content/themes/storefront-child/images/card-product-item-example.jpg"
                                             alt="">
                                        <p>НА ГРАНИТНОМ ЩЕБНЕ М1000 ></p>
                                    </a>
                                </div>
                                <div class="card-product-item">
                                    <a href="/<?= $category->slug; ?>">
                                        <img src="/wp-content/themes/storefront-child/images/card-product-item-example.jpg"
                                             alt="">
                                        <p>НА ГРАНИТНОМ ЩЕБНЕ М1000 ></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            <div class="col-lg-6 col-12 card-product-col mb-0">
                <div class="card-product">
                    <div class="card-product__header">
                        <p class="card-product__title">Специальные добавки и пластификаторы</p>
                        <p class="card-product__marks">
                            <img src="/wp-content/themes/storefront-child/svg/svg-arrow-up.svg"
                                 alt="mark">
                            Противоморозные, водонепроницаемые, повышающие эластичность, меняющие время схватывания*
                        </p>
                    </div>
                    <div class="card-product__body">
                        <div class="card-product-item w-100">
                            <img src="/wp-content/themes/storefront-child/images/card-product-adds.jpg"
                                 alt="">
                            <p>*Нужный тип и пропорции подбираются индивидуально</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 card-product-col">
                <div class="card-product">
                    <div class="card-product__header">
                        <p class="card-product__title">Продукция изготовлена по нормам ГОСТ 7473-2010</p>
                        <p class="card-product__marks">
                            <img src="/wp-content/themes/storefront-child/svg/svg-mark.svg"
                                 alt="mark">
                            государственный стандарт от 01.01.2012
                        </p>
                    </div>
                    <div class="card-product__body">
                        <div class="card-product-item gost w-100">
                            <a href="#">
                                <img src="/wp-content/themes/storefront-child/svg/svg-product-card-gost.svg"
                                     alt="">
                                <p>Посмотреть сертификаты ></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white main-services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p id="services" class="main-services__header">Услуги</p>
            </div>
            <div class="col-12 card-service-col">
                <div class="card-service type-1">
                    <p class="card-service__title">Доставляем продукцию без опозданий</p>
                    <p class="card-service__info">Спецтехника сопровождается операторами на всем участке пути</p>
                </div>
            </div>
            <div class="col-12 card-service-col">
                <div class="card-service type-2">
                    <p class="card-service__title">Предоставляем скидку от объема</p>
                    <p class="card-service__info">Следим за отгрузкой продукции и проводим выборочные проверки</p>
                </div>
            </div>
            <div class="col-12 card-service-col">
                <div class="card-service type-3">
                    <p class="card-service__title">Обеспечим строительным оборудованием</p>
                    <p class="card-service__info">
                        Бетононасос со стрелой 22 м, 42 м Миксер на 2 м3, 3 м3, 7 м3, 9 м3, 10 м3
                    </p>
                    <a href="#">Узнать о наличии техники</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-blue main-control">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="main-control__header">Контроль</p>
                <p class="main-control__after-header">Наша компания контролирует весь спектр услуг</p>
            </div>
        </div>
        <div class="row">
            <div class="col card-control-col">
                <div class="card-control">
                    <div class="card-control__img">
                        <img src="/wp-content/themes/storefront-child/svg/svg-gost.svg" alt="gost">
                    </div>
                    <p class="card-control__title">Качество товара</p>
                    <p class="card-control__info">Обеспечиваем соблюдения ГОСТ 7473-2010</p>
                </div>
            </div>
            <div class="col card-control-col">
                <div class="card-control">
                    <div class="card-control__img">
                        <img src="/wp-content/themes/storefront-child/svg/svg-control.svg" alt="control">
                    </div>
                    <p class="card-control__title">Объема отгружаемой продукции</p>
                    <p class="card-control__info">Следим за отгрузкой продукции и выборочно проводим проверки</p>
                </div>
            </div>
            <div class="col card-control-col">
                <div class="card-control">
                    <div class="card-control__img">
                        <img src="/wp-content/themes/storefront-child/svg/svg-term.svg" alt="term">
                    </div>
                    <p class="card-control__title">Срока поставок и времени прибытия</p>
                    <p class="card-control__info">Спецтехника сопровождается операторами на всем участке пути</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/delivery-zone', 'delivery-zone'); ?>
<?php get_template_part('template-parts/companies', 'companies'); ?>
<?php get_template_part('template-parts/prefooter', 'prefooter'); ?>

<?php get_footer(); ?>
