<div class="middle__container">
        <div class="wrapper flex-col">
            <section class="tools">
                <?php foreach ($tools["tools"] as $tool): ?>
                <div class="tools__item">
                    <img class="tools__item--img" src="./assets/logos/<?=$tool["image"]?>.svg" alt="" width="<?=$tool["width"]?>">
                    <p class="mx-auto mt-8"><?=$tool["tech"]?></p>
                </div>
                <?php endforeach;?>
            </section>
    
            <section class="packages">
                <div class="packages__tagline mx-auto">
                    <h1 class="text-center">Paket Hosting Singapura yang Tepat</h1>
                    <p class="text-center"> Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
                </div>
                <div class="packages__container mx-auto">
                    <?php foreach ($packages['packages'] as $package): ?>
                        <div class="package <?php if ($package["status"]) {echo "package--active";} else {echo "package__border";}?>">
                            
                            <div class="package__title <?php if ($package["status"]) {echo "package__title--active";} else {echo "package__border";}?>">
                                <?php if ($package["status"])  :?>
                                    <div class="package__best-seller">
                                        <span class="text-center">BEST SELLER!</span>
                                    </div>
                                <?php endif ?>
                                <h1> <?=$package["title"]?> </h1>
                            </div>
    
                            <div class="package__price <?php if ($package["status"]) {echo "package__price--active";} else {echo "package__border";}?>">
                                <div class="package__price__was">
                                    <p>
                                        Rp <?=number_format($package["old_price"])?>
                                    </p>
                                </div>
                                <div class="package__price__now">
    
                                    <span>Rp</span>
                                    <span class="package__price__now--thousands"><?=$package["current_price"]["thousands"]?></span>
                                    <span class="package__price__now--hundreds">.<?=$package["current_price"]["hundreds"]?></span>
                                    <span>/bln</span>
    
                                </div>
                            </div>
    
                            <div class="package__users <?php if ($package["status"]) {echo "package__users--active";} else {echo "package__border";}?>">
                                <p class="my-3">
                                    <span class="package__users__amount" ><?=$package["users"]?></span> Pengguna Terdaftar
                                </p>
                            </div>
    
                            <div class="package__benefits">
                                <p class="package__benefits__main my-3">
                                <?=$package["main_benefits"]?>
                                </p>
                                <ul>
                                    <?php foreach ($package["benefits"] as $benefit): ?>
                                        <?php if (count($benefit) == 2): ?>
                                            <li class="my-3">
                                                <span class="package__benefits--highlight" >
                                                    <?=$benefit[0]?>
                                                </span>
                                                    <?=$benefit[1]?>
                                            </li>
                                        <?php else: ?>
                                            <li class="my-3">
                                                <span class="package__benefits--highlight" >
                                                    <?=$benefit[0]?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </ul>
                                <button class="package__btn <?php if ($package["status"]) {echo "package__btn--active";}?> mb-3">
                                    Pilih Sekarang
                                </button>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </section>
    
            <section class="advantages">
                <p class="advantages__tagline">Powerful dengan Limit PHP yang Lebih Besar</p>
                <div class="advantages__table">
                    <div class="advantages__table__left">
                        <?php foreach ($advantages["advantages"] as $i => $item): ?>
                            <?php if ($i % 2 == 0): ?>
                                <div class="advantages__table--item <?php if (($i - 2) % 4 == 0) {echo "advantages__table--bg";}?> p-3">
                                    <p class="text-center">
                                        <i class="advantages__table--item--icon banner__info__benefit--icon fas fa-check-circle"></i>
                                        <?=$item?>
                                    </p>
                                </div>
                            <?php endif?>
                        <?php endforeach?>
                    </div>
                    <div class="advantages__table__right">
                         <?php foreach ($advantages["advantages"] as $i => $item): ?>
                            <?php if ($i % 2 != 0): ?>
                                <div class="advantages__table--item <?php if (($i - 3) % 4 == 0) {echo "advantages__table--bg";}?> p-3">
                                    <p class="text-center">
                                        <i class="advantages__table--item--icon banner__info__benefit--icon fas fa-check-circle"></i>
                                        <?=$item?>
                                    </p>
                                </div>
                            <?php endif?>
                        <?php endforeach?>
                    </div>
                </div>
            </section>
    
            <section class="features">
                <div class="features__line"></div>
                <p class="features__tagline text-center">Semua Paket Hosting Sudah Termasuk</p>
                <div class="features__container">
                    <?php foreach ($features["features"] as $feature): ?>
                        <div class="feature">
                            <img class="feature__img" src="./assets/logos/svg/icon PHP Hosting_<?=$feature["image"]?>" alt="">
                            <p class="feature__name text-center"><?=$feature["name"]?></p>
                            <p class="feature__desc text-center"><?=$feature["desc"]?></p>
                        </div>
                    <?php endforeach?>
                </div>
                <div class="features__line"></div>
            </section>
    
            <section class="laravel__support">
                <p class="laravel__support--tagline text-center my-3">Mendukung Penuh Framework Laravel</p>
                
                <div class="laravel__support__container">
                    <div class="laravel__support__container__left">
                        <p class="laravel__support__container__left--tagline">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</p>
                        <ul class="laravel__support__container__left__list">
                            <li class="laravel__support__container__left__list--item my-2">
                                <i class="banner__info__benefit--icon fas fa-check-circle mr-3"></i>
                                Install Laravel <strong>1 klik</strong> dengan Softaculous Installer
                            </li>
                            <li class="laravel__support__container__left__list--item my-2">
                                <i class=" banner__info__benefit--icon fas fa-check-circle mr-3"></i>
                                Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json,</strong> dan <strong>fileinfo.</strong>
                            </li>
                            <li class="laravel__support__container__left__list--item my-2">
                                <i class=" banner__info__benefit--icon fas fa-check-circle mr-3"></i>
                                Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall packages pilihan Anda.
                            </li>
                        </ul>
                        <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                        <button class="laravel__support__container__left__btn">
                            Pilih Hoting Anda
                        </button>
                    </div>
                    
                    <div class="laravel__support__container__right">
                        <img class="laravel__support__container__right--img" src="./assets/logos/svg/illustration banner support laravel hosting.svg" alt="">
                    </div>
                </div>
            </section>
        </div>
    </div>