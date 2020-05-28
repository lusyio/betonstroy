<div class="bg-grey delivery-zone">
    <div class="container position-relative">
        <div class="delivery-zone__absolute">
            <p>100 км</p>
            <p>Радиус доставки нашего производства</p>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="delivery-zone__header">Зона доставки</p>
            </div>
            <div class="col-12">
                <div class="delivery-zone__body">
                    <img class="delivery-zone__zone-icon" src="/wp-content/themes/storefront-child/svg/zona.svg" alt="">
                    <p><b>Выберите</b> на карте зону доставки, <br>
                        чтобы узнать стоимость.</p>
                </div>
                <div class="position-relative">
                    <div class="zone-container">
                        <div class="zone zone-100km">
                            <div class="zone-100km__btn">
                                <p>100</p>
                                <p>км</p>
                                <div class="card-zone">
                                    <div>
                                        <img src="/wp-content/themes/storefront-child/svg/Rasstoyanie.svg" alt="">
                                        <span> более 50 км</span>
                                    </div>
                                    <p><?= get_field('price_100km', 9) ?>₽ за 1м³</p>
                                </div>
                            </div>
                        </div>
                        <div class="zone zone-50km">
                            <img class="pin" src="/wp-content/themes/storefront-child/svg/pin.svg" alt="">
                            <div class="pin-trace">
                                <span class="first"></span>
                                <span class="second"></span>
                                <span class="third"></span>
                                <span class="fourth"></span>
                                <span class="fifth"></span>
                                <span class="sixth"></span>
                                <span class="seventh"></span>
                                <span class="eighth"></span>
                            </div>
                            <div class="zone-50km__btn">
                                <p>50</p>
                                <p>км</p>
                                <div class="card-zone">
                                    <div>
                                        <img src="/wp-content/themes/storefront-child/svg/Rasstoyanie.svg" alt="">
                                        <span>25-50 км</span>
                                    </div>
                                    <p><?= get_field('price_50km', 9) ?>₽ за 1м³</p>
                                </div>
                            </div>
                        </div>
                        <div class="zone zone-25km">
                            <div class="zone-25km__btn">
                                <p>25</p>
                                <p>км</p>
                                <div class="card-zone">
                                    <div>
                                        <img src="/wp-content/themes/storefront-child/svg/Rasstoyanie.svg" alt="">
                                        <span>25 км</span>
                                    </div>
                                    <p><?= get_field('price_25km', 9) ?>₽ за 1м³</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="dont-hover big-map big-map-desktop" src="/wp-content/themes/storefront-child/svg/Dostavka.svg"
                         alt="delivery-zone">
                    <img class="dont-hover big-map big-map-mobile" src="/wp-content/themes/storefront-child/svg/big-map.svg"
                         alt="delivery-zone">
                </div>
            </div>
        </div>
    </div>
</div>