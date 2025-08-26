<footer class="footer">
    <section class="footer__section">
        <div class="footer__section-heading">
            <h1 class="footer__section-heading--category">- Our Partners</h1>
            <p class="footer__section-heading--title">In Partnership with Many Companies</p>
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
                            Full Address
                        </h1>
                        <p class="footer__contact-block-info--description">
                            Business Center 1, M Floor,The Meydan Hotel, Nad Al Sheba,Dubai, U.A.E.
                        </p>
                    </div>
                </a>
                <a href="tel:+971585671088" class="footer__contact-block">
                    <div class="footer__contact-block-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="footer__contact-block-info">
                        <h1 class="footer__contact-block-info--title">
                            Number Phone
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
                            Email
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
                        <strong>Vertex Energy</strong>
                    </h1>
                    <p class="footer__nav-about--description">
                        Vertex Energy, founded in 2023, is your trusted partner in
                        maritime logistics, ship chartering, and oil trading.
                        Our mission is to provide high-quality and cost-effective solutions
                        for transporting goods and oil products across the
                        Black and Caspian seas. We've grown from a small company to
                        a respected industry player, serving a diverse clientele, from small
                        businesses to large corporations.
                    </p>
                </div>
                <div class="footer__nav-navigation">
                    <div class="footer__nav-navigation--navbar">
                        <h1 class="footer__nav-navigation--title">Navigation</h1>
                        <ul class="footer__nav-menu">
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('home'); ?>" class="footer__nav-menu--link <?= set_active_class(['home', ''], false, 'footer__nav-menu--link-active'); ?>">Home</a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('trading'); ?>" class="footer__nav-menu--link <?= set_active_class(['trading'], false, 'footer__nav-menu--link-active'); ?>">Trading</a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('shipping'); ?>" class="footer__nav-menu--link <?= set_active_class(['shipping'], false, 'footer__nav-menu--link-active'); ?>">Shipping</a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('projects'); ?>" class="footer__nav-menu--link <?= set_active_class(['projects'], false, 'footer__nav-menu--link-active'); ?>">Projects</a>
                            </li>
                            <li class="footer__nav-menu--item">
                                <a href="<?= base_url('faq'); ?>" class="footer__nav-menu--link <?= set_active_class(['faq'], false, 'footer__nav-menu--link-active'); ?>">FAQ</a>
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
                    <script>document.write(new Date().getFullYear());</script> Vertex Energy. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
