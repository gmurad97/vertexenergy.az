<?php $this->load->view("partials/_head.php"); ?>
<header class="header">
    <div class="header__block-global">
        <div class="image-block">
            <img src="<?= base_url('public/assets/content/img/trading1.jpg'); ?>" alt="Trading1">
        </div>
        <div class="content-block-global">
            <?php $this->load->view("partials/_navbar.php"); ?>
            <div class="description-block-global">
                <div class="container">
                    <div class="description-block-global__text-block">
                        <div class="description-block-global__heading">
                            <h1 class="description-block-global__heading--title-small">
                                - Shipping
                            </h1>
                            <h2 class="description-block-global__heading--title-large">
                                Maritime Logistics & Ship Chartering
                            </h2>
                            <p class="description-block-global__heading--description">
                                Vertex Energy provides reliable shipping solutions for
                                oil products across the Black and Caspian regions, supported
                                by trusted partners and a strong logistics network.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <section class="section">
        <div class="section__heading">
            <h1 class="section__heading--category">- Services</h1>
            <p class="section__heading--title">Our shipping services include:</p>
        </div>
        <div class="services-column">
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M3 20h18l-2-7H5l-2 7zM5 13h14l-2-6H7l-2 6z" />
                    </svg>
                </span>
                <p class="service-text">Ship chartering — spot, voyage and time charter</p>
            </div>
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="3" y="7" width="18" height="13" rx="2" ry="2" />
                        <path d="M16 3h-8v4h8V3z" />
                    </svg>
                </span>
                <p class="service-text">Cargo handling — port coordination, loading & discharge supervision</p>
            </div>
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 20h9" />
                        <path d="M12 4h9" />
                        <rect x="3" y="4" width="6" height="16" rx="1" />
                    </svg>
                </span>
                <p class="service-text">Customs & documentation — BL, LOI, insurance support</p>
            </div>
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg>
                </span>
                <p class="service-text">Risk control — laytime & demurrage optimization, P&amp;I coordination</p>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section__heading">
            <h1 class="section__heading--category">- Our Partners</h1>
            <p class="section__heading--title">In Partnership with Many Companies</p>
        </div>
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
</main>
<?php $this->load->view("partials/_footer.php"); ?>
<?php $this->load->view("partials/_scripts.php"); ?>

