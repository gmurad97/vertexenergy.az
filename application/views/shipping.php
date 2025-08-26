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
                                <?= $this->lang->line('shipping') ?>
                            </h1>
                            <h2 class="description-block-global__heading--title-large">
                                <?= $this->lang->line('maritime_logistics') ?>
                            </h2>
                            <p class="description-block-global__heading--description">
                                <?= $this->lang->line('shipping_description') ?>
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
            <h1 class="section__heading--category"><?= $this->lang->line('services') ?></h1>
            <p class="section__heading--title"><?= $this->lang->line('our_shipping_services') ?></p>
        </div>
        <div class="services-column">
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M3 20h18l-2-7H5l-2 7zM5 13h14l-2-6H7l-2 6z" />
                    </svg>
                </span>
                <p class="service-text"><?= $this->lang->line('ship_chartering') ?></p>
            </div>
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="3" y="7" width="18" height="13" rx="2" ry="2" />
                        <path d="M16 3h-8v4h8V3z" />
                    </svg>
                </span>
                <p class="service-text"><?= $this->lang->line('cargo_handling') ?></p>
            </div>
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 20h9" />
                        <path d="M12 4h9" />
                        <rect x="3" y="4" width="6" height="16" rx="1" />
                    </svg>
                </span>
                <p class="service-text"><?= $this->lang->line('customs_documentation') ?></p>
            </div>
            <div class="service-card">
                <span class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg>
                </span>
                <p class="service-text"><?= $this->lang->line('risk_control') ?></p>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("partials/_footer.php"); ?>
<?php $this->load->view("partials/_scripts.php"); ?>

