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
<?php
if (mb_strtolower(get_field('sostav')) === 'кладочного раствора'): ?>
    <div class="bg-blue composition type-1">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="composition__header">Состав кладочного раствора</p>
                    <p class="composition__after-header">Не содержит примесей, комков и шлаков</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card-composition">
                        <p class="card-composition__title">1.Специальные добавки</p>
                        <p class="card-composition__list">-Противоморозные</p>
                        <p class="card-composition__list">-Повышающие эластичность</p>
                        <p class="card-composition__list">-Меняющие время схватывания смеси</p>
                        <div class="card-composition__number left">
                            1
                        </div>
                    </div>
                    <div class="card-composition card-composition-mb">
                        <p class="card-composition__title">3.Вода</p>
                        <p class="card-composition__list">Очищенная</p>
                        <div class="card-composition__number left">
                            3
                        </div>
                    </div>
                    <p class="composition__info">Согласно ГОСТ 23732-2011. Вода для бетонов и строительных растворов</p>
                </div>
                <div class="col-lg-4 col-12 p-0">
                    <img class="composition__img mt-5"
                         src="/wp-content/themes/storefront-child/images/img-composition-type-2.png" alt="">
                </div>
                <div class="col-lg-4 col-12 mt-auto">
                    <div class="card-composition ml-auto">
                        <p class="card-composition__title">2.Песок</p>
                        <p class="card-composition__list">Гранитный/Гравийный</p>
                        <div class="card-composition__number right">
                            2
                        </div>
                    </div>
                    <div class="card-composition card-composition-mb ml-auto">
                        <p class="card-composition__title">4.Цемент</p>
                        <p class="card-composition__list">Высококачественный</p>
                        <div class="card-composition__number right">
                            4
                        </div>
                    </div>
                    <p class="composition__info mb-0 ml-auto">Согласно СНиП 5.01.23-83. Расхода цемента для
                        приготовления
                        бетонов</p>
                </div>
            </div>
        </div>
    </div>
<?php endif;

if (mb_strtolower(get_field('sostav')) === 'бетонного раствора'): ?>
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
                        <div class="card-composition__number left">
                            1
                        </div>
                    </div>
                    <div class="card-composition card-composition-mb">
                        <p class="card-composition__title">3.Песок</p>
                        <p class="card-composition__list">Подготовленный, мытый</p>
                        <div class="card-composition__number left">
                            3
                        </div>
                    </div>
                    <p class="composition__info">Согласно ГОСТ 8736-93. Песок для строительных работ</p>
                    <div class="card-composition card-composition-mb">
                        <p class="card-composition__title">5.Цемент</p>
                        <p class="card-composition__list">Высококачественный</p>
                        <div class="card-composition__number left">
                            5
                        </div>
                    </div>
                    <p class="composition__info mb-0">Согласно СНиП 5.01.23-83. Расхода цемента для приготовления
                        бетонов</p>
                </div>
                <div class="col-lg-4 col-12 p-0">
                    <img class="composition__img mt-5"
                         src="/wp-content/themes/storefront-child/images/img-composition-type-1.png" alt="">
                </div>
                <div class="col-lg-4 col-12 mt-auto mb-auto">
                    <div class="card-composition card-composition-mb ml-auto">
                        <p class="card-composition__title">2.Щебень</p>
                        <p class="card-composition__list">Гранитный/Гравийный</p>
                        <div class="card-composition__number right">
                            2
                        </div>
                    </div>
                    <p class="composition__info ml-auto">Согласно ГОСТ 8267-93. Щебень и гравий из плотных горных пород
                        для
                        строительных работ</p>
                    <div class="card-composition card-composition-mb ml-auto">
                        <p class="card-composition__title">4.Вода</p>
                        <p class="card-composition__list">Очищенная</p>
                        <div class="card-composition__number right">
                            4
                        </div>
                    </div>
                    <p class="composition__info ml-auto">Согласно ГОСТ 23732-2011. Вода для бетонов и строительных
                        растворов</p>
                </div>
            </div>
        </div>
    </div>
<?php endif;

$args1 = array(
    'category' => array('gotovaya-betonnaya-smes'),
);
$args2 = array(
    'category' => array('czementnyj-kladochnyj-rastvor'),
);
$products1 = wc_get_products($args1);
$products2 = wc_get_products($args2);
?>
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
                        <label class="payment-form__label" for="beton">Готовая бетонная смесь</label>
                        <select class="payment-form__select" name="beton" id="beton">
                            <option data-price="0" value="none">Не выбрано</option>
                            <?php foreach (array_reverse($products1) as $product1): ?>
                                <option data-price="<?= $product1->get_price(); ?>"
                                        value="<?= $product1->name; ?>"><?= $product1->name; ?>
                                    - <?= $product1->get_price(); ?> ₽/м³
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <label class="payment-form__label" for="cement">Цементный кладочный раствор</label>
                        <select class="payment-form__select" name="cement" id="cement">
                            <option data-price="0" value="none">Не выбрано</option>
                            <?php foreach (array_reverse($products2) as $product2): ?>
                                <option data-price="<?= $product2->get_price(); ?>"
                                        value="<?= $product2->name; ?>"><?= $product2->name; ?>
                                    - <?= $product2->get_price(); ?> ₽/м³
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">2. Укажите необходимый объем</p>
                        <label class="payment-form__label" for="volume">Объем поставки</label>
                        <input class="input input-primary" id="volume" placeholder="Например, 14м³" type="text">
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
                                <span class="btn-type minus-type-1">-</span><span class="target-type-1">0</span><span
                                        class="btn-type plus-type-1">+</span>
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
                                <span class="btn-type minus-type-2">-</span><span class="target-type-2">0</span><span
                                        class="btn-type plus-type-2">+</span>
                            </div>
                        </div>
                        <div class="card-delivery">
                            <div class="d-flex">
                                <img src="/wp-content/themes/storefront-child/svg/9м.svg" alt="">
                                <p class="card-delivery__title">
                                    Автобетонсмеситель 2
                                    <span>9 м³, 4 500₽</span>
                                </p>
                            </div>
                            <div class="card-delivery-counter">
                                <span class="btn-type minus-type-3">-</span><span class="target-type-3">0</span><span
                                        class="btn-type plus-type-3">+</span>
                            </div>
                        </div>
                        <div class="card-delivery">
                            <div class="d-flex">
                                <img src="/wp-content/themes/storefront-child/svg/10м.svg" alt="">
                                <p class="card-delivery__title">
                                    Автобетонсмеситель 3
                                    <span>10 м³, 5 500₽</span>
                                </p>
                            </div>
                            <div class="card-delivery-counter">
                                <span class="btn-type minus-type-4">-</span><span class="target-type-4">0</span><span
                                        class="btn-type plus-type-4">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">4. Куда доставить продукцию</p>
                        <label class="pure-material-radio" for="delivery_zone_1">
                            <input id="delivery_zone_1" value="25км" name="delivery-km" type="radio">
                            <span>До 25 км от Сергиев Посада</span>
                        </label>
                        <label class="pure-material-radio" for="delivery_zone_2">
                            <input id="delivery_zone_2" value="50км" name="delivery-km" type="radio">
                            <span>Более 50 км от Сергиев Посада</span>
                        </label>
                        <label class="pure-material-radio" for="delivery_zone_3">
                            <input id="delivery_zone_3" value="100км" name="delivery-km" type="radio">
                            <span>Более 100 км от Сергиев Посада</span>
                        </label>
                    </div>
                    <div class="payment-form-block">
                        <p class="payment-form__title">5. Когда доставить продукцию</p>
                        <label class="payment-form__label" for="delivery_date">Дата поставки</label>
                        <input type="date" min='<?= date('Y-m-d') ?>' id="delivery_date"
                               class="input input-primary" placeholder="22.03.20">
                    </div>
                    <div class="payment-form-block mb-1">
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
                        <p id="costPrice" class="card-cost__price">0 ₽*</p>
                    </div>
                    <div class="card-cost__footer">
                        <p>*Конечная стоимость может отличаться от расчетной за счет:</p>
                        <ul>
                            <li>- дополнительного строительного оборудования</li>
                            <li>- состава бетонного раствора</li>
                            <li>- вида выбранного щебня</li>
                            <li>- дополнительных добавок</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function ($) {
        const $costPrice = $('#costPrice');
        const $beton = $('#beton');
        const $cement = $('#cement');
        const $volume = $('#volume');
        const $deliveryDate = $('#delivery_date');

        let beton = null
        let cement = null
        let volume = null
        let deliveryKm = null
        let counter1 = 0;
        let counter2 = 0;
        let counter3 = 0;
        let counter4 = 0;

        const calculate = () => {
            if (beton !== null && volume !== null) {
                let calculetedPrice = Number(beton) * Number(volume) + Number(deliveryKm) + counter1 * 2500 + counter2 * 3500 + counter3 * 4500 + counter4 + 5500;
                $costPrice.text(calculetedPrice + ' ₽*')
            }
        }

        $beton.on('change', function () {
            let optionSelected = $("option:selected", this);
            let value = this.value;
            if (value === 'none'){
                $($beton).css('color', '#a4a4a4')
            } else {
                $($beton).css('color', '#000000')
            }
            let price = optionSelected[0].dataset.price
            $('.beton').val(value);
            beton = price
            calculate()
        })

        $cement.on('change', function () {
            let optionSelected = $("option:selected", this);
            let value = this.value;
            if (value === 'none'){
                $($cement).css('color', '#a4a4a4')
            } else {
                $($cement).css('color', '#000000')
            }
            let price = optionSelected[0].dataset.price
            $('.cement').val(value);
            cement = price
            calculate()
        })

        $('input[type=radio][name=delivery-km]').on('change', () => {
            let value = $("input[type=radio][name=delivery-km]:checked").val()
            if (value === '100км') {
                deliveryKm = 10500;
            }
            if (value === '50км') {
                deliveryKm = 7500;
            }
            if (value === '25км') {
                deliveryKm = 5000;
            }
            $('.delivery_zone').val(value)
            calculate()
        })

        $deliveryDate.on('change', () => {
            let value = $($deliveryDate).val()
            $('.delivery_date').val(value)
        })

        $volume.on('change', () => {
            let value = $($volume).val();
            $('.volume').val(value);
            volume = value
            calculate()
        })

        $('.btn-type').on('click', function () {
            if ($(this).hasClass('minus-type-1')) {
                if (counter1 > 0) {
                    counter1--
                }
                $('.target-type-1').text(counter1)
            }
            if ($(this).hasClass('plus-type-1')) {
                counter1++
                $('.target-type-1').text(counter1)
            }

            if ($(this).hasClass('minus-type-2')) {
                if (counter2 > 0) {
                    counter2--
                }
                $('.target-type-2').text(counter2)
            }
            if ($(this).hasClass('plus-type-2')) {
                counter2++
                $('.target-type-2').text(counter2)
            }

            if ($(this).hasClass('minus-type-3')) {
                if (counter3 > 0) {
                    counter3--
                }
                $('.target-type-3').text(counter3)
            }
            if ($(this).hasClass('plus-type-3')) {
                counter3++
                $('.target-type-3').text(counter3)
            }

            if ($(this).hasClass('minus-type-4')) {
                if (counter4 > 0) {
                    counter4--
                }
                $('.target-type-4').text(counter4)
            }
            if ($(this).hasClass('plus-type-4')) {
                counter4++
                $('.target-type-4').text(counter4)
            }
            $('.delivery_type').val('Миксер: ' + counter1 + ';' + 'Автобетонсмеситель1: ' + counter2 + ';' + 'Автобетонсмеситель2: ' + counter3 + ';' + 'Автобетонсмеситель4: ' + counter4 + ';')
            calculate()
        })

        $('#closeNav').on('click', () => {
            document.getElementById("mySidenav").style.width = '0'
            document.body.style.overflowY = 'auto'
        })

        $('.openNav').on('click', () => {
            document.getElementById("mySidenav").style.width = '80%'
            document.body.style.overflowY = 'hidden'
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
