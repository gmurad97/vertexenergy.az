<footer class="footer">
    <section class="footer__section">
        <div class="footer__section-heading">
            <h1 class="footer__section-heading--category"><?= $this->lang->line('footer_partners_category') ?></h1>
            <p class="footer__section-heading--title"><?= $this->lang->line('footer_partners_title') ?></p>
        </div>
        <div class="footer__section-overlay--triangle"></div>
        <div class="owl-carousel" id="owl-carousel-partners">
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/anika_solutions.png'); ?>" alt="Anika Solutions">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/consulting_service_association.png'); ?>" alt="Consulting Service Association">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/socar.png'); ?>" alt="Socar">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/encor.png'); ?>" alt="Encor">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/fuel_solutions.png'); ?>" alt="Fuel Solutions">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/sumgait_ashgarlar.png'); ?>" alt="Sumgait Ashgarlar">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/unibros_prime_energy.png'); ?>" alt="Unibros Prime Energy">
            </div>
        </div>
    </section>
    <div class="container">
        <div class="footer__content">
            <div class="footer__contact">
                <a href="https://maps.app.goo.gl/toYM1UgPT7K5RdYU9" target="_blank" class="footer__contact-block">
                    <div class="footer__contact-block-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="footer__contact-block-info">
                        <h1 class="footer__contact-block-info--title">
                            <?= $this->lang->line('footer_address_title') ?>
                        </h1>
                        <p class="footer__contact-block-info--description">
                            <?= $this->lang->line('footer_address_description') ?>
                        </p>
                    </div>
                </a>
                <a href="tel:+971585671088" class="footer__contact-block">
                    <div class="footer__contact-block-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="footer__contact-block-info">
                        <h1 class="footer__contact-block-info--title">
                            <?= $this->lang->line('footer_phone_title') ?>
                        </h1>
                        <p class="footer__contact-block-info--description">
                            +971 58 567 1088
                        </p>
                    </div>
                </a>
                <a href="mailto:office@vertexenergy.az" class="footer__contact-block">
                    <div class="footer__contact-block-icon">
                        <i class="fas fa-at"></i>
                    </div>
                    <div class="footer__contact-block-info">
                        <h1 class="footer__contact-block-info--title">
                            <?= $this->lang->line('footer_email_title') ?>
                        </h1>
                        <p class="footer__contact-block-info--description">
                            office@vertexenergy.az
                        </p>
                    </div>
                </a>
            </div>
            <div class="footer__nav">
                <div class="footer__nav-about">
                    <h1 class="footer__nav-about--title">
                        <strong><?= $this->lang->line('footer_company_name') ?></strong>
                    </h1>
                    <p class="footer__nav-about--description">
                        <?= $this->lang->line('footer_company_description') ?>
                    </p>
                </div>
                <div class="footer__nav-navigation">
                    <div class="footer__nav-navigation--navbar">
                        <h1 class="footer__nav-navigation--title"><?= $this->lang->line('footer_navigation_title') ?></h1>
                        <ul class="footer__nav-menu">
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('home'); ?>" class="footer__nav-menu--link <?= set_active_class(['home', ''], false, 'footer__nav-menu--link-active'); ?>"><?= $this->lang->line('nav_home') ?></a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('trading'); ?>" class="footer__nav-menu--link <?= set_active_class(['trading'], false, 'footer__nav-menu--link-active'); ?>"><?= $this->lang->line('nav_trading') ?></a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('shipping'); ?>" class="footer__nav-menu--link <?= set_active_class(['shipping'], false, 'footer__nav-menu--link-active'); ?>"><?= $this->lang->line('nav_shipping') ?></a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('projects'); ?>" class="footer__nav-menu--link <?= set_active_class(['projects'], false, 'footer__nav-menu--link-active'); ?>"><?= $this->lang->line('nav_projects') ?></a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('faq'); ?>" class="footer__nav-menu--link <?= set_active_class(['faq'], false, 'footer__nav-menu--link-active'); ?>"><?= $this->lang->line('nav_faq') ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__nav-navigation--social">
                        <div class="footer__nav-social">
                            <a href="<?= base_url('home'); ?>" class="footer__nav-social-icon">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="<?= base_url('home'); ?>" class="footer__nav-social-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="<?= base_url('home'); ?>" class="footer__nav-social-icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-copyright">
                <p class="footer__bottom-copyright--description">
                    &copy;
                    <script>document.write(new Date().getFullYear());</script> <?= $this->lang->line('footer_copyright') ?>
                </p>
            </div>
        </div>
    </div>
</footer>
