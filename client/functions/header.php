<section class="header">
    <div class="wrapper">
        <div class="header__upper">
            <div class="header__upper__left">
                <div class="header__upper__left--item">
                    <a href="#">
                    <i class="header__upper__left--item--icon fas fa-tag"></i>
                        Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]
                    </a>
                </div>
            </div>
            <ul class="header__upper__right">
                <li class="header__upper__right--item">
                    <a href="#">
                        <i class="header__upper__right--item--icon fas fa-phone-alt">
                        </i>
                        0274-5305505
                    </a>
                </li>
                <li class="header__upper__right--item">
                    <a href="#">
                        <i class="header__upper__right--item--icon fas fa-comment-alt"></i>
                        Live Chat
                    </a>
                </li>
                <li class="header__upper__right--item">
                    <a href="#">
                    <i class="header__upper__right--item--icon fas fa-user-circle"></i>
                        Member Area
                    </a>
                </li>
            </ul>
        </div>
    </div>
            <div class="header__lower">
                <div class="wrapper flex items-center">
                    <div class="header__lower__left">
                        <img src="./assets/logos/niagahoster-logo.png" alt="" width="100%">
                    </div>
                    <div class="header__lower__right">
                        <ul>
                            <?php foreach ($navigation_tabs["navigation_tabs"] as $tab): ?>
                            <li>
                                <a class="header__lower__right--tab text-right">
                                    <?=$tab?>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="menu-toggle">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
    </section>