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
                                - Trading
                            </h1>
                            <h2 class="description-block-global__heading--title-large">
                                Your Partner in Oil Markets.
                            </h2>
                            <p class="description-block-global__heading--description">
                                Vertex Energy specializes in trading refined oil products, primarily fuel oil and bitumen, with flows across the Black Sea, Caspian region, and Asia
                            </p>
                            <p class="description-block-global__heading--description">
                                We structure deals under FOB and CIF terms, supported by international surveyors (SGS, Intertek)..
                            </p>
                            <p class="description-block-global__heading--description">
                                Our trading expertise is backed by in-house logistics: chartering, port handling, and customs clearance. This combination allows us to provide end-to-end energy solutions, ensuring timely and reliable deliveries for our clients.
                            </p>
                            <p class="description-block-global__heading--description">
                                With strong compliance standards, financial transparency, and market knowledge, we deliver value and trust to our partners worldwide.
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
                                <h3 class="card-title">Products</h3>
                                <p class="card-subtitle">What we trade</p>
                                <ul class="card-list">
                                    <li>Fuel Oil</li>
                                    <li>Bitumen (60/70, 60/90)</li>
                                    <li>Gasoline</li>
                                    <li>Diesel</li>
                                    <li>Sulphur</li>
                                    <li>Other heavy oil products</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card-block stripes flex-fill">
                                <h3 class="card-title">Geography & Markets</h3>
                                <p class="card-subtitle">Where we operate</p>
                                <ul class="card-list">
                                    <li>Black Sea (Batumi, Poti, Novorossiysk, Samsun)</li>
                                    <li>Caspian (Baku, Aktau, Turkmenbashi)</li>
                                    <li>Middle East (Basra, Mersin, Ceyhan)</li>
                                    <li>Asia (China)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="card-block stripes flex-fill">
                                <h3 class="card-title">Compliance & Risk</h3>
                                <p class="card-subtitle">Risk management</p>
                                <ul class="card-list">
                                    <li>Full KYC/AML compliance</li>
                                    <li>Contracts under international trade regulations</li>
                                    <li>Independent inspection at loading & discharge ports</li>
                                    <li>Transparency, risk control, secure transactions</li>
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

