
    <div class="wrapper flex-col justify-center">
        <section class="modules">
                <h1 class="modules__tagline text-center">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h1>
                <div class="modules__container">
                    <?php foreach ($modules["modules"] as $module): ?>
                        <div class="modules__container__inner">
                            <?php foreach ($module as $item): ?>
                                <p>
                                    <?=$item;?>
                                </p>
                            <?php endforeach?>
                        </div>
        
                    <?php endforeach?>
                </div>
                <button class="modules__btn my-10">
                    Selengkapnya
                </button>
        </section>
    </div>