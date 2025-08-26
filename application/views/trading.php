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
                                <br><br>
                                We structure deals under FOB and CIF terms, supported by international surveyors (SGS, Intertek)..
                                <br><br>
                                Our trading expertise is backed by in-house logistics: chartering, port handling, and customs clearance. This combination allows us to provide end-to-end energy solutions, ensuring timely and reliable deliveries for our clients.
                                <br><br>
                                With strong compliance standards, financial transparency, and market knowledge, we deliver value and trust to our partners worldwide.

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
    <div class="main-overlay--radial"></div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                Products we trade
                <ul>
                    <li>Fuel Oil</li>
                    <li>Bitumen (60/70, 60/90)</li>
                    <li>Gasoline</li>
                    <li>Diesel</li>
                    <li>Sulphur</li>
                    <li>Other heavy oil products (upon request)</li>
                </ul>
            </div>
            <div class="col-6">
                Where we operate
                <ul>
                    <li>Black Sea (Batumi, Poti, Novorossiysk, Samsun)</li>
                    <li>Caspian (Baku, Aktau, Turkmenbashi)</li>
                    <li>Middle East (Basra, Mersin, Ceyhan)</li>
                    <li>Asia (China)</li>
                </ul>
            </div>
        </div>
        <!-- <section class="section">
                <div class="faq">
                    <div class="faq__block">
                        <div class="faq__minimazed-detail">
                            <div class="faq__minimazed-detail-header">
                                <h1 class="faq__minimazed-detail-header--title">
                                    What Does Vertex Energy Specialize In?
                                </h1>
                                <button type="button" class="faq__minimazed-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="faq__maximized-detail">
                            <div class="faq__maximized-detail-header">
                                <h1 class="faq__maximized-detail-header--title">
                                    What Does Vertex Energy Specialize In?
                                </h1>
                                <button type="button" class="faq__maximized-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="faq__maximized-detail-body">
                                <p class="faq__maximized-detail-body--description">
                                    Vertex Energy specializes in logistics, ship
                                    chartering, and oil trading. We provide high-quality
                                    and cost-effective solutions for the transportation
                                    of goods and oil products across the Black and Caspian seas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__block">
                        <div class="faq__minimazed-detail">
                            <div class="faq__minimazed-detail-header">
                                <h1 class="faq__minimazed-detail-header--title">
                                    How Did Vertex Energy Begin?
                                </h1>
                                <button type="button" class="faq__minimazed-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="faq__maximized-detail">
                            <div class="faq__maximized-detail-header">
                                <h1 class="faq__maximized-detail-header--title">
                                    How Did Vertex Energy Begin?
                                </h1>
                                <button type="button" class="faq__maximized-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="faq__maximized-detail-body">
                                <p class="faq__maximized-detail-body--description">
                                    Vertex Energy was founded in 2023 by a team of
                                    experienced professionals in the maritime industry.
                                    Starting as a small company, we've grown into a
                                    reputable and trusted company, serving a wide range
                                    of clients from small businesses to large corporations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__block">
                        <div class="faq__minimazed-detail">
                            <div class="faq__minimazed-detail-header">
                                <h1 class="faq__minimazed-detail-header--title">
                                    What Services Does Vertex Energy Offer?
                                </h1>
                                <button type="button" class="faq__minimazed-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="faq__maximized-detail">
                            <div class="faq__maximized-detail-header">
                                <h1 class="faq__maximized-detail-header--title">
                                    What Services Does Vertex Energy Offer?
                                </h1>
                                <button type="button" class="faq__maximized-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="faq__maximized-detail-body">
                                <p class="faq__maximized-detail-body--description">
                                    Vertex Energy offers a comprehensive range of
                                    services for transporting goods and oil
                                    products across the Black and Caspian seas.
                                    Our services include logistics, ship chartering,
                                    and oil trading, with a focus on delivering value
                                    through professionalism, integrity, and innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__block">
                        <div class="faq__minimazed-detail">
                            <div class="faq__minimazed-detail-header">
                                <h1 class="faq__minimazed-detail-header--title">
                                    How Does Vertex Energy Ensure Quality and Efficiency?
                                </h1>
                                <button type="button" class="faq__minimazed-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="faq__maximized-detail">
                            <div class="faq__maximized-detail-header">
                                <h1 class="faq__maximized-detail-header--title">
                                    How Does Vertex Energy Ensure Quality and Efficiency?
                                </h1>
                                <button type="button" class="faq__maximized-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="faq__maximized-detail-body">
                                <p class="faq__maximized-detail-body--description">
                                    Vertex Energy is committed to maintaining quality
                                    and efficiency in all our operations. We use state-of-the-art
                                    technology and equipment, comply with international
                                    standards and regulations, and have a qualified and dedicated
                                    staff to ensure safety and efficiency.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__block">
                        <div class="faq__minimazed-detail">
                            <div class="faq__minimazed-detail-header">
                                <h1 class="faq__minimazed-detail-header--title">
                                    How Can You Get in Touch with Vertex Energy?
                                </h1>
                                <button type="button" class="faq__minimazed-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="faq__maximized-detail">
                            <div class="faq__maximized-detail-header">
                                <h1 class="faq__maximized-detail-header--title">
                                    How Can You Get in Touch with Vertex Energy?
                                </h1>
                                <button type="button" class="faq__maximized-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="faq__maximized-detail-body">
                                <p class="faq__maximized-detail-body--description">
                                    If you're interested in our services or have any questions,
                                    please feel free to contact us. You can reach us by phone,
                                    email, or through our website, and we look forward to hearing
                                    from you and working with you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-6">
                Trading Instruments
                How we trade
                <ul>
                    <li>Incoterms: FOB, CIF</li>
                    <li>Cargo inspection: international surveyors (SGS, Intertek)</li>
                </ul>
            </div>
            <div class="col-6">
                Compliance & risk management
                <ul>
                    <li>Full KYC/AML compliance</li>
                    <li>Contracts under international trade regulations</li>
                    <li>Independent inspection at loading & discharge ports</li>
                    <li>Focus on transparency, risk control, and secure transactions</li>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("partials/_footer.php"); ?>
<?php $this->load->view("partials/_scripts.php"); ?>

