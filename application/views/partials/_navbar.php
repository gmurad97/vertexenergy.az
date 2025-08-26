<nav class="navbar">
    <div class="container">
        <div class="navbar__content">
            <div class="navbar__logo">
                <a href="<?= base_url('home'); ?>">
                    <img src="<?= base_url('public/assets/content/img/logo/logo.png'); ?>" alt="Logo">
                </a>
            </div>
            <div class="navbar__menu">
                <ul class="navbar__list">
                    <li class="navbar__item" tabindex="0">
                        <a href="<?= base_url(''); ?>" class="navbar__link <?= set_active_class(['home', ''], false, 'navbar__link--active'); ?>">Home</a>
                    </li>
                    <li class="navbar__item">
                        <a href="<?= base_url('trading'); ?>" class="navbar__link <?= set_active_class(['trading'], false, 'navbar__link--active'); ?>">Trading</a>
                    </li>
                    <li class="navbar__item">
                        <a href="<?= base_url('shipping'); ?>" class="navbar__link <?= set_active_class(['shipping'], false, 'navbar__link--active'); ?>">Shipping</a>
                    </li>
                    <li class="navbar__item">
                        <a href="<?= base_url('projects'); ?>" class="navbar__link <?= set_active_class(['projects'], false, 'navbar__link--active'); ?>">Projects</a>
                    </li>
                    <li class="navbar__item">
                        <a href="<?= base_url('faq'); ?>" class="navbar__link <?= set_active_class(['faq'], false, 'navbar__link--active'); ?>">FAQ</a>
                    </li>
                </ul>
            </div>
            <div class="navbar__phone">
                <a href="tel:+971585671088" class="navbar__phone--link">+971 58 567 1088</a>
            </div>
            <div class="language">
                <ul class="language__list">
                    <li class="language__item">
                        <a class="language__link" href="<?= base_url('locale/en'); ?>">
                            <img class="language__img" src="<?= base_url('public/assets/langs/az.svg'); ?>" alt="AZ">
                        </a>
                    </li>
                    <li class="language__item">
                        <a class="language__link" href="<?= base_url('locale/ru'); ?>">
                            <img class="language__img" class="language__img" src="<?= base_url('public/assets/langs/ru.svg'); ?>" alt="RU">
                        </a>
                    </li>
                    <li class="language__item">
                        <a class="language__link" href="<?= base_url('locale/us'); ?>">
                            <img class="language__img" src="<?= base_url('public/assets/langs/us.svg'); ?>" alt="EN">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
