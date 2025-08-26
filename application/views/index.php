<?php $this->load->view("partials/_head.php"); ?>
<header class="header">
    <div class="header__block-main">
        <div class="video-block">
            <video class="video-block--video" autoplay loop muted>
                <source src="<?= base_url('public/assets/content/video/ship.mp4'); ?>" type="video/mp4">
            </video>
        </div>
        <div class="content-block-main">
            <?php $this->load->view("partials/_navbar.php"); ?>
            <div class="description-block-main">
                <div class="container">
                    <div class="description-block-secondary-wrapper">
                        <div class="description-block-main__text-block">
                            <div class="description-block-main__overlay--triangle"></div>
                            <div class="description-block-main__heading">
                                <h1 class="description-block-main__heading--title">Your Reliable</h1>
                                <h1 class="description-block-main__heading--title">Partner.</h1>
                            </div>
                            <div class="description-block-main__body">
                                <p class="description-block-main__body--description">
                                    Welcome to <strong>Vertex Energy</strong>, your reliable partner
                                    in logistics, ship chartering, and oil trading.
                                </p>
                            </div>
                        </div>
                        <div class="description-block-main__scroll-btn">
                            <button type="button" id="description_block_main_scroll_btn">
                                Scroll Down
                                <i class="fa-solid fa-chevron-down ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__overlay--circle"></div>
    <div class="header__block-secondary">
        <div class="header__color-block--black"></div>
        <div class="content-block-secondary">
            <div class="description-block-secondary">
                <div class="description-block-secondary__overlay--triangle"></div>
                <div class="container d-flex flex-row justify-content-between align-items-center">
                    <div class="description-block-secondary__text-block">
                        <div class="description-block-secondary__heading">
                            <h1 class="description-block-secondary__heading--title">
                                - About us
                            </h1>
                            <h1 class="description-block-secondary__heading--title">
                                We are a reliable logistics firm.
                            </h1>
                        </div>
                        <div class="description-block-secondary__body">
                            <p class="description-block-secondary__body--description">
                                <strong>Vertex Energy</strong>, founded in 2024, is an independent oil trading company operating across the Black Sea, Caspian region, and Asian markets. Our mission is to provide reliable, transparent, and competitive energy solutions — from sourcing and sales to shipping and delivery
                                <br><br>
                                Established with a clear focus on oil trading, Vertex Energy has grown into a dynamic market player, partnering with refineries, terminals, and shipping companies to ensure safe and efficient flows of energy products.
                                <br><br>
                                Our services extend beyond trading: we manage maritime logistics, ship chartering, cargo insurance, and customs documentation. By combining trading expertise with operational excellence, Vertex Energy delivers clients a seamless experience — from contract signing to final discharge.
                                <br><br>
                                With a strong commitment to integrity, safety, and efficiency, we strive to be the partner of choice for businesses seeking dependable energy solutions. Let’s move energy forward, together.
                            </p>
                            <!-- <p class="description-block-secondary__body--description">
                                    Our comprehensive services cover all aspects of logistics,
                                    from planning to documentation. We also offer value-added services
                                    like cargo insurance, warehousing, and customs brokerage.
                                    With a dedicated team and a commitment to safety, efficiency,
                                    and quality, we're here to exceed your expectations.
                                    Contact us today via phone, email, or our website,
                                    and let's work together."
                                </p> -->
                        </div>
                    </div>
                    <div class="description-block-secondary__img">
                        <img src="<?= base_url('public/assets/content/img/ship1.jpg'); ?>" alt="Ship">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="container">
        <section class="section">
            <div class="section__heading">
                <h1 class="section__heading--category">- Our Service Area</h1>
                <p class="section__heading--title">Maps</p>
            </div>
            <div id="world_map"></div>
            <div class="services">
                <div class="row">
                    <div class="col-md-4 p-2">
                        <div class="services__block">
                            <div class="services__icon-block">
                                <div class="services__icon-block--circle"></div>
                                <img class="services__icon-block--img" src="<?= base_url('public/assets/content/img/icon/ship.svg'); ?>" alt="Shipping">
                            </div>
                            <div class="services__heading-block">
                                <a href="shipping.html" class="services__heading-block--title">Shipping</a>
                                <p class="services__heading-block--description">
                                    Explore our top-notch shipping solutions for goods and
                                    oil products across the Black and Caspian seas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="services__block">
                            <div class="services__icon-block">
                                <div class="services__icon-block--circle"></div>
                                <img class="services__icon-block--img" src="<?= base_url('public/assets/content/img/icon/trading.svg'); ?>" alt="Trading">
                            </div>
                            <div class="services__heading-block">
                                <a href="trading.html" class="services__heading-block--title">Trading</a>
                                <p class="services__heading-block--description">
                                    Discover our competitive prices and flexible
                                    terms for a wide range of oil products.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="services__block">
                            <div class="services__icon-block">
                                <div class="services__icon-block--circle"></div>
                                <img class="services__icon-block--img" src="<?= base_url('public/assets/content/img/icon/projects.svg'); ?>" alt="Projects">
                            </div>
                            <div class="services__heading-block">
                                <a href="projects.html" class="services__heading-block--title">Projects</a>
                                <p class="services__heading-block--description">
                                    Learn about our track record of successfully
                                    completing diverse projects for various clients.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-0">
            <div class="section__heading">
                <h1 class="section__heading--category">- Our Services</h1>
                <p class="section__heading--title">Shipping and Trading Solutions</p>
            </div>
            <div class="components">
                <div class="row">
                    <div class="col-lg-5 col-md-12 py-2">
                        <div class="components-block">
                            <div class="components-block__overlay--radial"></div>
                            <div class="components-block__overlay--linear"></div>
                            <div class="components-block__overlay--img">
                                <img src="<?= base_url('public/assets/content/img/trading1.jpg'); ?>" alt="Trading">
                            </div>
                            <div class="components-block__head">
                                <a href="trading.html" class="components-block__head--link">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="components-block__body">
                                <h1 class="components-block__body--title">
                                    Trading
                                </h1>
                                <p class="components-block__body--description">
                                    Explore competitive pricing and flexible terms for a
                                    variety of high-quality oil products, backed by
                                    strong regional partnerships with major producers and refineries.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 py-2">
                        <div class="components-block">
                            <div class="components-block__overlay--radial"></div>
                            <div class="components-block__overlay--linear"></div>
                            <div class="components-block__overlay--img">
                                <img src="<?= base_url('public/assets/content/img/ship2.jpg'); ?>" alt="Ship">
                            </div>
                            <div class="components-block__head">
                                <a href="shipping.html" class="components-block__head--link">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="components-block__body">
                                <h1 class="components-block__body--title">
                                    Shipping
                                </h1>
                                <p class="components-block__body--description">
                                    Discover reliable shipping tailored to your needs,
                                    ensuring safe and smooth cargo transportation across the
                                    Black and Caspian seas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php $this->load->view("partials/_footer.php"); ?>
<?php $this->load->view("partials/_scripts.php"); ?>

