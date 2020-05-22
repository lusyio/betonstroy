<div class="bg-white pre-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <p class="pre-footer__header">Остались вопросы?</p>
                <div class="pre-footer__body">
                    <img class="pre-footer__avatar"
                         src="<?= get_field('general_avatar', 44) ?>" alt="avatar">
                    <div>
                        <p class="pre-footer__name"><?= get_field('general_fio', 44) ?></p>
                        <p class="pre-footer__info">Менеджер по работе с клиентами</p>
                        <p class="pre-footer__contacts">
                            <a href="tel:<?= get_field('general_phone', 44) ?>"><?= get_field('general_phone', 44) ?></a>
                            <a href="mailto:<?= get_field('general_email', 44) ?>"><?= get_field('general_email', 44) ?></a>
                        </p>
                    </div>
                </div>
                <p class="pre-footer__or">или оставьте заявку</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#questionModal">Задать вопрос</button>
            </div>
            <div class="col-lg-5 col-12 m-auto">
                <img class="pre-footer__img" src="/wp-content/themes/storefront-child/images/pre-footer.png"
                     alt="phone">
            </div>
        </div>
    </div>
</div>