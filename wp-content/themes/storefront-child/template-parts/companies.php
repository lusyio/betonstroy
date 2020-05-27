<div id="companies" class="bg-companies companies">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="companies__header">Нам доверяют</div>
                <div class="companies__after-header">Крупные государственные и частные компании</div>
            </div>
            <div class="col-lg-5 col-12 card-companies-big-col">
                <div class="card-companies-big">
                    <div class="card-companies-big__header">
                        <img src="<?= get_field('client_img_big', 9); ?>" alt="gazprom">
                    </div>
                    <div class="card-companies-big__body">
                        <p class="card-companies-big__title"><?= get_field('client_title_big', 9) ?></p>
                        <p class="card-companies-big__city"><?= get_field('client_city_big', 9) ?></p>
                        <div class="card-companies-big__list">
                            <p>Поставляемая продукция:</p>
                            <p><?= get_field('client_products_big', 9) ?></p>
                        </div>
                        <div class="card-companies-big__list">
                            <p>Объем:</p>
                            <p><?= get_field('client_products_volume_big', 9) ?></p>
                        </div>
                        <div class="card-companies-big__list">
                            <p>Срок годности</p>
                            <p><?= get_field('client_exp_date_big', 9) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col card-companies-col">
                        <div class="card-companies">
                            <img src="<?= get_field('img_client_2', 9); ?>" alt="">
                        </div>
                    </div>
                    <div class="col card-companies-col">
                        <div class="card-companies">
                            <img src="<?= get_field('img_client_3', 9); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col card-companies-col">
                        <div class="card-companies">
                            <img src="<?= get_field('img_client_4', 9); ?>" alt="">
                        </div>
                    </div>
                    <div class="col card-companies-col">
                        <div class="card-companies">
                            <img src="<?= get_field('img_client_5', 9); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="card-companies__footer">
                            <span>156</span>Компаний доверяют нашей продукции
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
