
    <section class="footer">
        <div class="wrapper flex-col">
            <div class="footer__upper">
                <div class="footer__card">
                    <h1 class="footer__card__title my-4">HUBUNGI KAMI</h1>
                    <ul class="footer__card__details">
                        <li>0274-5305505</li>
                        <li>Senin - Minggu</li>
                        <li>24 Jam Nonstop</li>
                        <li> <br> </li>
                        <li>Jl. Selokan Mataram Monjali</li>
                        <li>Karangjati MT I/304</li>
                        <li>Sinduadi, Mlati, Sleman</li>
                        <li>Yogyakarta 55284</li>
                    </ul>
                </div>
                <div class="footer__card">
                    <h1 class="footer__card__title my-4">LAYANAN</h1>
                    <ul class="footer__card__details">
                        <li>Domain</li>
                        <li>Shared Hosting</li>
                        <li>Cloud VPS Hosting</li>
                        <li>Managed VPS Hosting </li>
                        <li>Web Builder</li>
                        <li>Kemanan SSL/HTTPS</li>
                        <li>Jasa Pembuatan Website</li>
                        <li>Program Afiliasi</li>
                    </ul>
                </div>
                <div class="footer__card">
                    <h1 class="footer__card__title my-4">SERVICE HOSTING</h1>
                    <ul class="footer__card__details">
                        <li>Hosting Murah</li>
                        <li>Hosting Indonesia</li>
                        <li>Hosting Singapura SG</li>
                        <li>Hosting PHP</li>
                        <li>Hosting Laravel</li>
                    </ul>
                </div>
                <div class="footer__card">
                    <h1 class="footer__card__title my-4">TUTORIAL</h1>
                    <ul class="footer__card__details">
                        <li>Knowledgebase</li>
                        <li>Blog</li>
                        <li>Cara Pembayaran</li>
                    </ul>
                </div>
                <div class="footer__card">
                    <h1 class="footer__card__title my-4">TENTANG KAMI</h1>
                    <ul class="footer__card__details">
                        <li>Tim Niagahoster</li>
                        <li>Karir</li>
                        <li>Events</li>
                        <li>Penawaran & Promo Spesial</li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>
                <div class="footer__card">
                    <h1 class="footer__card__title my-4">KENAPA PIILH NIAGAHOSTER</h1>
                    <ul class="footer__card__details">
                        <li>Support Terbaik</li>
                        <li>Garansi Harga Termurah</li>
                        <li>Domain Gratis Selamanya</li>
                        <li>Datacenter Hosting Terbaik</li>
                        <li>Review Pelanggan</li>
                    </ul>
                </div>
                <div class="footer__card">
                    <h1 class="footer__card__title my-4">NEWSLETTER</h1>
                    <form action="" class="footer__subscription--form my-3">
                        <input type="email" placeholder="Email" size="10">
                        <div class="footer__subscription--btn">
                             <button type="submit">Berlangganan</button>
                        </div>
                    </form>
                    <small>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</small>
                </div>
    
                <div class="footer__card">
                <h1 class="footer__card__title my-4 newsletter">NEWSLETTER</h1>
    
                    <div class="footer__share__container">
                        <i class="fab fa-facebook fa-4x"></i>
                        <i class="fab fa-twitter fa-4x"></i>
                        <i class="fab fa-google-plus fa-4x"></i>
                    </div>
                </div>
            </div>
            <div class="footer__lower">
                <h1 class="footer__lower--title my-3">PEMBAYARAN</h1>
    
                <div class="footer__lower__logos">
                <?php foreach ($payments["payments"] as $payment) :?>
                    <div class="footer__lower__logo mr-4">
                        <img src="./assets/logos/payments/<?= $payment ?>.png" alt="" width="60px" class="<?php if($payment == "BCA" || $payment == "Permata Bank") echo "add__invert" ?>">
                    </div>
                    <?php endforeach ?>
                </div>
     
            </div>
    
            <p class="mt-5">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
    
            <section class="copyright">
                <div class="copyright__upper">
                    <span> Copyright  &#169;2016 Niagahoster | Hosting powered by PHP7. CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta </span>
                    <span> <a href="">Syarat dan Ketentuan</a>  | <a href="">Kebijakan Privasi</a> </span>
                </div>
                <span>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</span>
        
            </section>
        </div>
    </section>

