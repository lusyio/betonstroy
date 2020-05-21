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

<div id="mySidenav" class="sidenav">
    <div class="sidenav-header">
        <a id="closeNav" class="closebtn">&times;</a>
        <p class="sidenav-header__title">Рассчитать стоимость</p>
    </div>
    <div class="sidenav-body container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="payment-form">
                    <div class="payment-form-block">
                        <p class="payment-form__title">1. Выберите тип продукции</p>
                        <label class="payment-form__label" for="">Готовая бетонная смесь</label>
                        <select class="payment-form__select" name="" id="">
                            <option value="М-100">М-100</option>
                            <option value="М-150">М-150</option>
                            <option value="М-200">М-200</option>
                        </select>
                        <label class="payment-form__label" for="">Цементный кладочный раствор</label>
                        <select class="payment-form__select" name="" id="">
                            <option value="М-100">М-100</option>
                            <option value="М-150">М-150</option>
                            <option value="М-200">М-200</option>
                        </select>
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">2. Укажите необходимый объем</p>
                        <label class="payment-form__label" for="">Объем поставки</label>
                        <input class="input input-primary" placeholder="Например, 14м³" type="text">
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">3. Выберите вид доставки</p>
                        <div class="card-delivery">
                            <div class="d-flex">
                                <img src="/wp-content/themes/storefront-child/svg/2м.svg" alt="">
                                <p class="card-delivery__title">
                                    Миксер
                                    <span>2 м³, 2 500₽</span>
                                </p>
                            </div>
                            <div class="card-delivery-counter">
                                - 1 +
                            </div>
                        </div>
                        <div class="card-delivery">
                            <div class="d-flex">
                                <img src="/wp-content/themes/storefront-child/svg/7м.svg" alt="">
                                <p class="card-delivery__title">
                                    Автобетонсмеситель 1
                                    <span>7 м³, 3 500₽</span>
                                </p>
                            </div>
                            <div class="card-delivery-counter">
                                - 1 +
                            </div>
                        </div>
                        <div class="card-delivery">
                            <div class="d-flex">
                                <img src="/wp-content/themes/storefront-child/svg/9м.svg" alt="">
                                <p class="card-delivery__title">
                                    Автобетонсмеситель 2
                                    <span>9 м³, 3 500₽</span>
                                </p>
                            </div>
                            <div class="card-delivery-counter">
                                - 1 +
                            </div>
                        </div>
                        <div class="card-delivery">
                            <div class="d-flex">
                                <img src="/wp-content/themes/storefront-child/svg/10м.svg" alt="">
                                <p class="card-delivery__title">
                                    Автобетонсмеситель 3
                                    <span>10 м³, 3 500₽</span>
                                </p>
                            </div>
                            <div class="card-delivery-counter">
                                - 1 +
                            </div>
                        </div>
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">4. Куда доставить продукцию</p>
                        <label for="">
                            <input name="delivery-km" type="radio">
                            До 25 км от Сергиев Посада
                        </label>
                        <label for="">
                            <input name="delivery-km" type="radio">
                            Более 50 км от Сергиев Посада
                        </label>
                        <label for="">
                            <input name="delivery-km" type="radio">
                            Более 100 км от Сергиев Посада
                        </label>
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">5. Когда доставить продукцию</p>
                        <label class="payment-form__label" for="">Дата поставки</label>
                        <input type="date" class="input input-primary" placeholder="22.03.20">
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">6. Подтвердить расчет</p>
                        <?= do_shortcode('[caldera_form id="CF5ec694accab7e"]') ?>
                    </div>
                    <p>Мы перезвоним 1 раз, чтобы подтвердить расчет</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card-cost">
                    <div class="card-cost__header">
                        <p class="card-cost__title">Стоимость доставки</p>
                        <img src="/wp-content/themes/storefront-child/images/card-cost.png" alt="">
                        <p class="card-cost__price">232 000 ₽*</p>
                    </div>
                    <div class="card-cost__footer">
                        <p>*Конечная стоимость может отличаться от расчетной за счет: - дополнительного
                            строительного оборудования - состава бетонного раствора - вида выбранного щебня -
                            дополнительных добавок</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function ($) {
        $('#closeNav').on('click', () => {
            document.getElementById("mySidenav").style.width = '0'
        })

        $('.openNav').on('click', () => {
            console.log('qwe')
            document.getElementById("mySidenav").style.width = '80%'
        })
    })
</script>

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
