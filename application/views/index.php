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
                                <h1 class="description-block-main__heading--title"><?= $this->lang->line('hero_line_1') ?></h1>
                                <h1 class="description-block-main__heading--title"><?= $this->lang->line('hero_line_2') ?></h1>
                            </div>
                            <div class="description-block-main__body">
                                <p class="description-block-main__body--description">
                                    <?= $this->lang->line('welcome_paragraph') ?>
                                </p>
                            </div>
                        </div>
                        <div class="description-block-main__scroll-btn">
                            <button type="button" id="description_block_main_scroll_btn">
                                <?= $this->lang->line('scroll_down') ?>
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
                                <?= $this->lang->line('about_us_category') ?>
                            </h1>
                            <h1 class="description-block-secondary__heading--title">
                                <?= $this->lang->line('about_us_title') ?>
                            </h1>
                        </div>
                        <div class="description-block-secondary__body">
                            <p class="description-block-secondary__body--description">
                                <?= $this->lang->line('about_para_1') ?>
                            </p>
                            <p class="description-block-secondary__body--description">
                                <?= $this->lang->line('about_para_2') ?>
                            </p>
                            <p class="description-block-secondary__body--description">
                                <?= $this->lang->line('about_para_3') ?>
                            </p>
                            <p class="description-block-secondary__body--description">
                                <?= $this->lang->line('about_para_4') ?>
                            </p>
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
                <h1 class="section__heading--category"><?= $this->lang->line('our_service_area_category') ?></h1>
                <p class="section__heading--title"><?= $this->lang->line('maps_title') ?></p>
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
                                <a href="<?= base_url('shipping'); ?>" class="services__heading-block--title"><?= $this->lang->line('service_shipping_title') ?></a>
                                <p class="services__heading-block--description">
                                    <?= $this->lang->line('service_shipping_desc') ?>
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
                                <a href="<?= base_url('trading'); ?>" class="services__heading-block--title"><?= $this->lang->line('service_trading_title') ?></a>
                                <p class="services__heading-block--description">
                                    <?= $this->lang->line('service_trading_desc') ?>
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
                                <a href="<?= base_url('projects'); ?>" class="services__heading-block--title"><?= $this->lang->line('service_projects_title') ?></a>
                                <p class="services__heading-block--description">
                                    <?= $this->lang->line('service_projects_desc') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-0">
            <div class="section__heading">
                <h1 class="section__heading--category"><?= $this->lang->line('our_services_category') ?></h1>
                <p class="section__heading--title"><?= $this->lang->line('our_services_title') ?></p>
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
                                <a href="<?= base_url('trading'); ?>" class="components-block__head--link">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="components-block__body">
                                <h1 class="components-block__body--title">
                                    <?= $this->lang->line('component_trading_title') ?>
                                </h1>
                                <p class="components-block__body--description">
                                    <?= $this->lang->line('component_trading_desc') ?>
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
                                <a href="<?= base_url('shipping'); ?>" class="components-block__head--link">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="components-block__body">
                                <h1 class="components-block__body--title">
                                    <?= $this->lang->line('component_shipping_title') ?>
                                </h1>
                                <p class="components-block__body--description">
                                    <?= $this->lang->line('component_shipping_desc') ?>
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

