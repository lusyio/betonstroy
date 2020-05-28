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


<div class="fixed-btn openNav">
    <span>
        Рассчитать стоимость
    </span>
</div>

<?php
$args1 = array(
    'category' => array('gotovaya-betonnaya-smes'),
);
$args2 = array(
    'category' => array('czementnyj-kladochnyj-rastvor'),
);
$products1 = wc_get_products($args1);
$products2 = wc_get_products($args2);
?>
<div id="sidenavContainer" class="sidenav-container">
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
                            <input class="input input-primary" id="volume" placeholder="Например, 14м³" type="number">
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
                                    <span class="btn-type minus-type-1">-</span><span
                                            class="target-type-1">0</span><span
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
                                    <span class="btn-type minus-type-2">-</span><span
                                            class="target-type-2">0</span><span
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
                                    <span class="btn-type minus-type-3">-</span><span
                                            class="target-type-3">0</span><span
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
                                    <span class="btn-type minus-type-4">-</span><span
                                            class="target-type-4">0</span><span
                                            class="btn-type plus-type-4">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="payment-form-block">
                            <p class="payment-form__title">4. Куда доставить продукцию</p>
                            <label class="pure-material-radio" for="delivery_zone_1">
                                <input id="delivery_zone_1" value="25км" name="delivery-km" type="radio">
                                <span>До 25 км от Сергиев Посада <span
                                            id="25km-target"><?= get_field('price_25km', 9) ?></span>₽ за м³</span>
                            </label>
                            <label class="pure-material-radio" for="delivery_zone_2">
                                <input id="delivery_zone_2" value="50км" name="delivery-km" type="radio">
                                <span>25-50 км от Сергиев Посада <span
                                            id="50km-target"><?= get_field('price_50km', 9) ?></span>₽ за м³</span>
                            </label>
                            <label class="pure-material-radio" for="delivery_zone_3">
                                <input id="delivery_zone_3" value="100км" name="delivery-km" type="radio">
                                <span>Более 50 км от Сергиев Посада <span
                                            id="100km-target"><?= get_field('price_100km', 9) ?></span>₽ за м³</span>
                            </label>
                        </div>
                        <div class="payment-form-block">
                            <p class="payment-form__title">5. Когда доставить продукцию</p>
                            <label class="payment-form__label" for="delivery_date">Дата поставки</label>
                            <input type="date" value="<?= date('Y-m-d') ?>" min='<?= date('Y-m-d') ?>'
                                   id="delivery_date"
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
            if ((beton !== null && volume !== null) || (cement !== null && volume !== null)) {
                let calculetedPrice = Number(beton) * Number(volume) + Number(cement) * Number(volume) + Number(deliveryKm) * Number(volume) + counter1 * 2500 + counter2 * 3500 + counter3 * 4500 + counter4 * 5500;
                $costPrice.text(calculetedPrice + ' ₽*')
            }
        }

        $beton.on('change', function () {
            let optionSelected = $("option:selected", this);
            let value = this.value;
            if (value === 'none') {
                $($cement).prop('disabled', false)
                $($beton).css('color', '#a4a4a4')
            } else {
                $($cement).prop('disabled', true)
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
            if (value === 'none') {
                $($beton).prop('disabled', false)
                $($cement).css('color', '#a4a4a4')
            } else {
                $($beton).prop('disabled', true)
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
                deliveryKm = $('#100km-target').text();
            }
            if (value === '50км') {
                deliveryKm = $('#50km-target').text();
            }
            if (value === '25км') {
                deliveryKm = $('#25km-target').text();
            }
            $('.delivery_zone').val(value)
            calculate()
        })

        $deliveryDate.on('change', () => {
            let value = $($deliveryDate).val()
            $('.delivery_date').val(value)
        })

        $('.delivery_date').val($($deliveryDate).val())

        $volume.on('keyup', function () {
            let value = $($volume).val();
            $('.volume').val(value);
            volume = value;
            nullCounters()
            if (value >= 10) {
                counter4 = Math.floor(value / 10)
                $('.target-type-4').text(counter4)
                value %= 10;
            }
            if (value >= 9) {
                counter3 = Math.floor(value / 9)
                $('.target-type-3').text(counter3)
                value %= 9;
            }
            if (value >= 7) {
                counter2 = Math.floor(value / 7)
                $('.target-type-2').text(counter2)
                value %= 7;
            }
            if (value) {
                counter1 = Math.ceil(value / 2)
                $('.target-type-1').text(counter1)
            }
            $('.delivery_type').val('Миксер: ' + counter1 + '; ' + 'Автобетонсмеситель1: ' + counter2 + '; ' + 'Автобетонсмеситель2: ' + counter3 + '; ' + 'Автобетонсмеситель4: ' + counter4 + ';')
            calculate()
        })

        const nullCounters = () => {
            counter1 = 0
            counter2 = 0
            counter3 = 0
            counter4 = 0
            $('.target-type-1').text(counter1)
            $('.target-type-2').text(counter2)
            $('.target-type-3').text(counter3)
            $('.target-type-4').text(counter4)
        }

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

        $('#closeNav, #sidenavContainer').on('click', function (e) {
            if (e.target !== this) {
                return;
            }
            document.getElementById("mySidenav").style.width = '0'
            document.getElementById("mySidenav").style.right = '-70%'
            document.getElementById("sidenavContainer").style.width = '0'
            document.body.style.overflowY = 'auto'
        })

        $('.openNav').on('click', () => {
            if (document.documentElement.clientWidth < 576) {
                document.getElementById("mySidenav").style.width = '100%'
            } else {
                document.getElementById("mySidenav").style.width = '80%'
            }
            document.getElementById("mySidenav").style.right = '0'
            document.getElementById("sidenavContainer").style.width = '100%'
            document.body.style.overflowY = 'hidden'
        })
    })
</script>

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
            <div class="col-6 col-lg-5">
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
            <div class="col-6 col-lg-3">
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

        $('.checkbox-toggle').on('change', function () {
            if ($('.checkbox-toggle').is(':checked')) {
                $('body').addClass('overflow-hidden');
            } else {
                $('body').removeClass('overflow-hidden');
            }
        });
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
