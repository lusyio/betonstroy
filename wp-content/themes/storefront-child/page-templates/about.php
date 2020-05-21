<?php
/*
Template Name: about
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

</div>
</div>

<div class="bg-blue about-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="about-block__header">О компании БетонСтрой</p>
                <p class="about-block__after-header">Главное направление компании — производство бетоных смесей всех
                    классов. Наша команда успешно разрабатывает новые добавки и примеси для улучшения свойств смесей.
                    Благодаря современному автопарку и работе операторов мы покрываем новые зоны доставки.</p>
                <p class="about-block__info">БетонСтрой расширяет производство за счет:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col about-block__point">
                        <img src="/wp-content/themes/storefront-child/images/img-point-1.png" alt="">
                        <p>Новых мощностей</p>
                    </div>
                    <div class="col about-block__point">
                        <img src="/wp-content/themes/storefront-child/images/img-point-2.png" alt="">
                        <p>Новых типов смесей</p>
                    </div>
                    <div class="col about-block__point">
                        <img src="/wp-content/themes/storefront-child/images/img-point-3.png" alt="">
                        <p>Качества сервиса</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mt-auto">
                <a class="btn btn-outline-white mb-0" href="/#products">Продукция</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-grey team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="team__header">Команда</p>
                <p class="team__after-header">Которая идет к этим целям</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card-team">
                    <div class="card-team__header" style="background: url(<?= get_field('img_first') ?>) center;">
                    </div>
                    <div class="card-team__body">
                        <p class="card-team__title"><?= get_field('fio_first') ?></p>
                        <p class="cart-team__info"><?= get_field('post_first') ?></p>
                        <a class="cart-item__email"
                           href="mailto:<?= get_field('email_first') ?>"><?= get_field('email_first') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card-team">
                    <div class="card-team__header" style="background: url(<?= get_field('img_second') ?>) center;">
                    </div>
                    <div class="card-team__body">
                        <p class="card-team__title"><?= get_field('fio_second') ?></p>
                        <p class="cart-team__info"><?= get_field('post_second') ?></p>
                        <a class="cart-item__email"
                           href="mailto:<?= get_field('email_second') ?>"><?= get_field('email_second') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white passports">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="passports__header">Паспорта качества продукции</p>
                <p class="passports__after-header">Вся продукция сертифицирована и успешно прошла проверки</p>
            </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $gallery = get_post_gallery_images_with_info();
                foreach ($gallery as $image_obj) :
                    ?>
                    <div class="swiper-slide">
                        <div class="card-certificate">
                            <div class="card-certificate__header">
                                <img src="<?php echo $image_obj['src'] ?> ?>" alt="">
                            </div>
                            <div class="card-certificate__body">
                                <p class="card-certificate__title"><?= $image_obj['caption'] ?></p>
                                <a href="<?= $image_obj['href'] ?>">Показать ></a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="passports-arrows">
            <div class="passports-arrows-prev"><img src="/wp-content/themes/storefront-child/svg/svg-arrow-left.svg"
                                                    alt=""></div>
            <div class="passports-arrows-next"><img src="/wp-content/themes/storefront-child/svg/svg-arrow-right.svg"
                                                    alt=""></div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="passports__header">Паспорта качества материала</p>
                <p class="passports__after-header">Вся продукция сертифицирована и успешно прошла проверки</p>
            </div>
        </div>
        <div class="row">
            <?php
            $gallerySecond = get_post_gallery_images_with_info(null, 1);
            foreach ($gallerySecond as $image_obj) :
                ?>
                <div class="col-lg-6 col-12">
                    <div class="card-passport">
                        <div class="card-passport__img">
                            <img src="/wp-content/themes/storefront-child/svg/svg-card-passport.svg" alt="">
                        </div>
                        <div>
                            <p class="card-passport__title"><?= $image_obj['caption'] ?></p>
                            <a href="<?= $image_obj['href'] ?>">Показать ></a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>

<div class="bg-grey contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 contacts-left">
                <p class="contacts__header">Контакты</p>
                <p class="contacts__after-header">Всю интересующую информацию можно получить, связавшись с нами</p>
                <p class="contacts__title">Отдел производства</p>
                <div class="contacts__list">
                    <img src="/wp-content/themes/storefront-child/svg/navigation.svg" alt="">
                    <div>
                        <p>г. Сергив Посад, дер. Тураково</p>
                    </div>
                </div>
                <div class="contacts__list">
                    <img src="/wp-content/themes/storefront-child/svg/svg-worktime.svg" alt="">
                    <div>
                        <p>Ежедневно с 10-00 до 20-00</p>
                        <p>Воскресенье — выходной</p>
                    </div>
                </div>
                <div class="contacts__list">
                    <img src="/wp-content/themes/storefront-child/svg/svg-phone.svg" alt="">
                    <div>
                        <a href="tel:+79269919510">+7 (926) 991-95-10</a>
                        <a href="tel:+79269919512">+7 (926) 991-95-12</a>
                        <a href="tel:+74965516991">+7 (496) 551-69-91</a>
                    </div>
                </div>
                <div class="contacts__list">
                    <img src="/wp-content/themes/storefront-child/svg/svg-mail.svg" alt="">
                    <div>
                        <a href="mailto:bs5516991@mail.ru">bs5516991@mail.ru</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="contacts__map">

                </div>
            </div>
        </div>
    </div>
</div>
<?= add_help_banner('Остались вопросы?') ?>
<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: '.passports-arrows-next',
            prevEl: '.passports-arrows-prev',
        },
    });
</script>
<?php get_footer(); ?>
