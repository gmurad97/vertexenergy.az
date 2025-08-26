<?php $this->load->view("partials/_head.php"); ?>
<header class="header">
    <div class="header__block-global">
        <div class="image-block">
            <img src="<?= base_url('public/assets/content/img/projects1.jpg'); ?>" alt="Projects1">
        </div>
        <div class="content-block-global">
            <?php $this->load->view("partials/_navbar.php"); ?>
            <div class="description-block-global">
                <div class="container">
                    <div class="description-block-global__text-block">
                        <div class="description-block-global__heading">
                            <h1 class="description-block-global__heading--title-small text-orange">
                                - Projects
                            </h1>
                            <h2 class="description-block-global__heading--title-large">
                                Our Project Portfolio
                            </h2>
                            <p class="description-block-global__heading--description">
                                Explore our diverse portfolio of projects that showcase our
                                commitment to excellence in logistics, ship chartering,
                                and oil trading. From seamless cargo transport to successful
                                oil trading ventures, our projects embody our dedication
                                to professionalism, integrity, and innovation.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="container">
        <section class="section">
            <div class="filtering-container" id="projects_block">
                <div class="container">
                    <div class="row">
                        <div class="filtering-control">
                            <div class="filtering-control__block">
                                <button type="button" class="filtering-control__block--button" data-target="trading">
                                    Trading
                                </button>
                                <button type="button" class="filtering-control__block--button" data-target="shipping">
                                    Shipping
                                </button>
                            </div>
                            <div class="filtering-control__block">
                                <button type="button" class="filtering-control__block--button" id="see_all">
                                    See All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-md-5 p-2" data-item="trading">
                            <div class="filtering-block">
                                <div class="filtering-block__overlay">
                                    <img src="<?= base_url('public/assets/content/img/trading1.jpg'); ?>" class="filtering-block__overlay--img" alt="Trading1">
                                </div>
                                <div class="filtering-block__header">
                                    <h1 class="filtering-block__header--title">Project 01</h1>
                                    <button type="button" class="filtering-block__header--button">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="filtering-block__body">
                                    <p class="filtering-block__body--description">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed congue interdum ligula a dignissim.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed lobortis orci elementum egestas lobortis. -->
                                    </p>
                                </div>
                                <div class="filtering-block__footer">
                                    <button type="button" class="filtering-block__footer--button">
                                        <div class="filtering-block__footer--button-toggle"></div>
                                        Trading
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-2" data-item="shipping">
                            <div class="filtering-block">
                                <div class="filtering-block__overlay-gray">
                                    <img src="<?= base_url('public/assets/content/img/ship1.jpg'); ?>" class="filtering-block__overlay-gray--img" alt="Ship1">
                                </div>
                                <div class="filtering-block__header">
                                    <h1 class="filtering-block__header--title">Project 02</h1>
                                </div>
                                <div class="filtering-block__body">
                                    <p class="filtering-block__body--description">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed congue interdum ligula a dignissim. -->
                                    </p>
                                </div>
                                <div class="filtering-block__footer">
                                    <button type="button" class="filtering-block__footer--button">
                                        <div class="filtering-block__footer--button-toggle"></div>
                                        Shipping
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-2" data-item="shipping">
                            <div class="filtering-block">
                                <div class="filtering-block__overlay-linear-red">
                                    <img src="<?= base_url('public/assets/content/img/ship3.jpg'); ?>" class="filtering-block__overlay-linear-red--img" alt="Ship3">
                                </div>
                                <div class="filtering-block__header">
                                    <h1 class="filtering-block__header--title">Project 03</h1>
                                </div>
                                <div class="filtering-block__body">
                                    <p class="filtering-block__body--description">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed congue interdum ligula a dignissim. -->
                                    </p>
                                </div>
                                <div class="filtering-block__footer">
                                    <button type="button" class="filtering-block__footer--button">
                                        <div class="filtering-block__footer--button-toggle"></div>
                                        Shipping
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 p-2" data-item="shipping">
                            <div class="filtering-block">
                                <div class="filtering-block__overlay-video-gray">
                                    <video class="filtering-block__overlay-video-gray--video" src="<?= base_url('public/assets/content/video/ship.mp4'); ?>" autoplay loop muted></video>
                                </div>
                                <div class="filtering-block__header">
                                    <h1 class="filtering-block__header--title">Project 04</h1>
                                    <button type="button" class="filtering-block__header--button">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="filtering-block__body">
                                    <p class="filtering-block__body--description">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed congue interdum ligula a dignissim. -->
                                    </p>
                                </div>
                                <div class="filtering-block__footer">
                                    <button type="button" class="filtering-block__footer--button">
                                        <div class="filtering-block__footer--button-toggle"></div>
                                        Shipping
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 p-2" data-item="shipping">
                            <div class="filtering-block">
                                <div class="filtering-block__overlay-red">
                                    <img src="<?= base_url('public/assets/content/img/ship2.jpg'); ?>" class="filtering-block__overlay-red--img" alt="Ship2">
                                </div>
                                <div class="filtering-block__header">
                                    <h1 class="filtering-block__header--title">Project 05</h1>
                                </div>
                                <div class="filtering-block__body">
                                    <p class="filtering-block__body--description">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed congue interdum ligula a dignissim.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed lobortis orci elementum egestas lobortis. -->
                                    </p>
                                </div>
                                <div class="filtering-block__footer">
                                    <button type="button" class="filtering-block__footer--button">
                                        <div class="filtering-block__footer--button-toggle"></div>
                                        Shipping
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-2" data-item="shipping">
                            <div class="filtering-block">
                                <div class="filtering-block__overlay-linear-blue">
                                    <img src="<?= base_url('public/assets/content/img/ship1.jpg'); ?>" class="filtering-block__overlay-linear-blue--img" alt="Ship3">
                                </div>
                                <div class="filtering-block__header">
                                    <h1 class="filtering-block__header--title">Project 06</h1>
                                </div>
                                <div class="filtering-block__body">
                                    <p class="filtering-block__body--description">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed congue interdum ligula a dignissim. -->
                                    </p>
                                </div>
                                <div class="filtering-block__footer">
                                    <button type="button" class="filtering-block__footer--button">
                                        <div class="filtering-block__footer--button-toggle"></div>
                                        Shipping
                                    </button>
                                </div>
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

