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
                                Vertex Energy provides reliable shipping solutions for oil products across the Black and Caspian regions, supported by trusted partners and a strong logistics network.
                            </p>
                        </div>
                        <!-- <div class="description-block-global__content">
                                <ul class="description-block-global__content-menu">
                                    <li class="content-menu__item">
                                        <i class="fa-solid fa-check"></i>
                                        <a href="#" class="content-menu__link">
                                            Trading 001
                                        </a>
                                    </li>
                                    <li class="content-menu__item">
                                        <i class="fa-solid fa-check"></i>
                                        <a href="#" class="content-menu__link">
                                            Trading 002
                                        </a>
                                    </li>
                                    <li class="content-menu__item">
                                        <i class="fa-solid fa-check"></i>
                                        <a href="#" class="content-menu__link">
                                            Trading 003
                                        </a>
                                    </li>
                                </ul>
                                <ul class="description-block-global__content-menu">
                                    <li class="content-menu__item">
                                        <i class="fa-solid fa-check"></i>
                                        <a href="#" class="content-menu__link">
                                            Preference 001
                                        </a>
                                    </li>
                                    <li class="content-menu__item">
                                        <i class="fa-solid fa-check"></i>
                                        <a href="#" class="content-menu__link">
                                            Preference 002
                                        </a>
                                    </li>
                                    <li class="content-menu__item">
                                        <i class="fa-solid fa-check"></i>
                                        <a href="#" class="content-menu__link">
                                            Preference 003
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <section>
        Services
        Our shipping services include:
        <ul>
            <li>•Ship chartering — spot, voyage and time charter</li>
            <li>•Cargo handling — port coordination, loading & discharge supervision</li>
            <li>•Customs & documentation — BL, LOI, insurance support</li>
            <li>•Risk control — laytime & demurrage optimization, P&I coordination</li>
        </ul>


    </section>
    <section>
        <div class="container my-5">
            3️⃣ География
            Main shipping routes
            <ul>
                <li>Caspian Sea: Baku ↔ Aktau / Turkmenbashi</li>
                <li>
                    Black Sea: Batumi / Poti ↔ Samsun / Novorossiysk
                </li>
                <li>Middle East: Basra ↔ Mersin / Ceyhan</li>
            </ul>
        </div>

    </section>


    <section>
        <div class="container my-5">
            4 Compliance
            <ul>
                <li> All operations are handled in line with international maritime standards, ensuring safety, efficiency, and transparency.</li>
            </ul>
        </div>

    </section>
    <section class="section">
        <div class="section__heading">
            <h1 class="section__heading--category">- Our Partners</h1>
            <p class="section__heading--title">In Partnership with Many Companies</p>
        </div>

        <div class="owl-carousel" id="owl-carousel-partners">
            <!-- <div class="item">
                    <img src="<?= base_url('public/assets/content/img/partners/mislton.png'); ?>" alt="Mislton">
                </div> -->
            <!-- <div class="item">
                    <img src="<?= base_url('public/assets/content/img/partners/green_line_shipping.png'); ?>" alt="Green_Line_Shipping">
                </div> -->
            <!-- <div class="item">
                    <img src="<?= base_url('public/assets/content/img/partners/muzn_energy.png'); ?>" alt="Muzn_Energy">
                </div> -->
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/socar.png'); ?>" alt="Socar">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/anika.jpg'); ?>" alt="Socar">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/consul.jpg'); ?>" alt="Socar">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/encor.png'); ?>" alt="Encor">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/fuel_solutions.png'); ?>" alt="Fuel_Solutions">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/sumgait_ashgarlar.png'); ?>" alt="Sumgait_Ashgarlar">
            </div>
            <div class="item">
                <img src="<?= base_url('public/assets/content/img/partners/unibros_prime_energy.png'); ?>" alt="Unibros_Prime_Energy">
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("partials/_footer.php"); ?>
<?php $this->load->view("partials/_scripts.php"); ?>

