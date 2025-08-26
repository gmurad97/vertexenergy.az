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
                                <?= $this->lang->line('trading') ?>
                            </h1>
                            <h2 class="description-block-global__heading--title-large">
                                <?= $this->lang->line('partner_in_oil_markets') ?>
                            </h2>
                            <p class="description-block-global__heading--description">
                                <?= $this->lang->line('trading_description_1') ?>
                            </p>
                            <p class="description-block-global__heading--description">
                                <?= $this->lang->line('trading_description_2') ?>
                            </p>
                            <p class="description-block-global__heading--description">
                                <?= $this->lang->line('trading_description_3') ?>
                            </p>
                            <p class="description-block-global__heading--description">
                                <?= $this->lang->line('trading_description_4') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="main-overlay--radial"></div>
    <div class="container">
        <div class="row">
            <section class="section py-5">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card-block stripes flex-fill">
                                <h3 class="card-title"><?= $this->lang->line('products') ?></h3>
                                <p class="card-subtitle"><?= $this->lang->line('what_we_trade') ?></p>
                                <ul class="card-list">
                                    <li><?= $this->lang->line('fuel_oil') ?></li>
                                    <li><?= $this->lang->line('bitumen') ?></li>
                                    <li><?= $this->lang->line('gasoline') ?></li>
                                    <li><?= $this->lang->line('diesel') ?></li>
                                    <li><?= $this->lang->line('sulphur') ?></li>
                                    <li><?= $this->lang->line('other_heavy_oil') ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card-block stripes flex-fill">
                                <h3 class="card-title"><?= $this->lang->line('geography_markets') ?></h3>
                                <p class="card-subtitle"><?= $this->lang->line('where_we_operate') ?></p>
                                <ul class="card-list">
                                    <li><?= $this->lang->line('black_sea') ?></li>
                                    <li><?= $this->lang->line('caspian') ?></li>
                                    <li><?= $this->lang->line('middle_east') ?></li>
                                    <li><?= $this->lang->line('asia') ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card-block stripes flex-fill">
                                <h3 class="card-title"><?= $this->lang->line('compliance_risk') ?></h3>
                                <p class="card-subtitle"><?= $this->lang->line('risk_management') ?></p>
                                <ul class="card-list">
                                    <li><?= $this->lang->line('kyc_aml') ?></li>
                                    <li><?= $this->lang->line('contracts') ?></li>
                                    <li><?= $this->lang->line('inspection') ?></li>
                                    <li><?= $this->lang->line('transparency') ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php $this->load->view("partials/_footer.php"); ?>
<?php $this->load->view("partials/_scripts.php"); ?>

