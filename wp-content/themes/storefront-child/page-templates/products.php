<?php
/*
Template Name: products
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<?php
$page_slug = $post->post_name;
?>
</div>
</div>
<?php get_template_part('template-parts/company-pluses', 'company-pluses'); ?>
<div class="bg-blue composition type-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="composition__header">Состав бетонного раствора</p>
                <p class="composition__after-header">Не содержит примесей, комков и шлаков</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="card-composition">
                    <p class="card-composition__title">1.Специальные добавки</p>
                    <p class="card-composition__list">-Противоморозные</p>
                    <p class="card-composition__list">-Водонепроницаемые</p>
                    <p class="card-composition__list">-Повышающие эластичность</p>
                    <p class="card-composition__list">-Меняющие время схватывания смеси</p>
                </div>
                <div class="card-composition card-composition-mb">
                    <p class="card-composition__title">3.Песок</p>
                    <p class="card-composition__list">Подготовленный, мытый</p>
                </div>
                <p class="composition__info">Согласно ГОСТ 8736-93. Песок для строительных работ</p>
                <div class="card-composition card-composition-mb">
                    <p class="card-composition__title">5.Цемент</p>
                    <p class="card-composition__list">Высококачественный</p>
                </div>
                <p class="composition__info mb-0">Согласно СНиП 5.01.23-83. Расхода цемента для приготовления
                    бетонов</p>
            </div>
            <div class="col-lg-4 col-12">
                <div class="composition__img"></div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card-composition card-composition-mb mt-5">
                    <p class="card-composition__title">2.Щебень</p>
                    <p class="card-composition__list">Гранитный/Гравийный</p>
                </div>
                <p class="composition__info">Согласно ГОСТ 8267-93. Щебень и гравий из плотных горных пород для
                    строительных работ</p>
                <div class="card-composition card-composition-mb">
                    <p class="card-composition__title">2.Вода</p>
                    <p class="card-composition__list">Очищенная</p>
                </div>
                <p class="composition__info">Согласно ГОСТ 23732-2011. Вода для бетонов и строительных растворов</p>
            </div>
        </div>
    </div>
</div>

<?= get_products_by_category_slug($page_slug) ?>
<?= add_help_banner() ?>
<div class="bg-white mini-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 card-mini-services-col">
                <div class="card-mini-services type-1">
                    <p class="card-mini-services__title">Прямые доставки</p>
                    <p class="card-mini-services__info">Работаем без посредников</p>
                </div>
            </div>
            <div class="col-lg-4 col-12 card-mini-services-col">
                <div class="card-mini-services type-2">
                    <p class="card-mini-services__title">Собственный автопарк</p>
                    <p class="card-mini-services__info">Владеем собственным транспортом для перевозки</p>
                </div>
            </div>
            <div class="col-lg-4 col-12 card-mini-services-col">
                <div class="card-mini-services type-3">
                    <p class="card-mini-services__title">Скидка за объем</p>
                    <p class="card-mini-services__info">Продаем без наценки</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/delivery-zone', 'delivery-zone'); ?>
<?php get_template_part('template-parts/companies', 'companies'); ?>
<?php get_template_part('template-parts/prefooter', 'prefooter'); ?>

<?php get_footer(); ?>
