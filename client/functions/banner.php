
<div class="wrapper flex">
    <section class="banner">
        <div class="banner__info mr-3">
            <h1 class="banner__info__primary">PHP HOSTING</h1>
            <p class="banner__info__secondary">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</p>
            <?php foreach ($banner_benefits["banner_benefits"] as $benefit): ?>
                <p class="banner__info__benefit">
                    <i class="banner__info__benefit--icon fas fa-check-circle"></i>
                    <?=$benefit;?>
                </p>
            <?php endforeach;?>
        </div>
        <div class="banner__img">
            <img src="./assets/logos/svg/illustration banner PHP hosting-01.svg" alt="" width="100%">
        </div>
    </section>
</div>