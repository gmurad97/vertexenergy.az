<?php $this->load->view("partials/_head.php"); ?>
<header class="header">
    <div class="header__block-global">
        <div class="image-block">
            <img src="<?= base_url('public/assets/content/img/trading2.jpg'); ?>" alt="Trading2">
        </div>
        <div class="content-block-global">
            <?php $this->load->view("partials/_navbar.php"); ?>
            <div class="description-block-global">
                <div class="container">
                    <div class="description-block-global__text-block">
                        <div class="description-block-global__heading">
                            <h1 class="description-block-global__heading--title-small">
                                <?= $this->lang->line('faq') ?>
                            </h1>
                            <h2 class="description-block-global__heading--title-large">
                                <?= $this->lang->line('frequently_asked_questions') ?>
                            </h2>
                            <p class="description-block-global__heading--description">
                                <?= $this->lang->line('faq_description') ?>
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
        <section class="section">
            <div class="faq">
                <?php $faq_items = [
                    ['title' => 'what_specialize', 'body' => 'what_specialize_body'],
                    ['title' => 'how_begin', 'body' => 'how_begin_body'],
                    ['title' => 'what_services', 'body' => 'what_services_body'],
                    ['title' => 'how_quality', 'body' => 'how_quality_body'],
                    ['title' => 'how_contact', 'body' => 'how_contact_body'],
                ]; ?>
                <?php foreach ($faq_items as $item): ?>
                    <div class="faq__block">
                        <div class="faq__minimazed-detail">
                            <div class="faq__minimazed-detail-header">
                                <h1 class="faq__minimazed-detail-header--title">
                                    <?= $this->lang->line($item['title']) ?>
                                </h1>
                                <button type="button" class="faq__minimazed-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="faq__maximized-detail">
                            <div class="faq__maximized-detail-header">
                                <h1 class="faq__maximized-detail-header--title">
                                    <?= $this->lang->line($item['title']) ?>
                                </h1>
                                <button type="button" class="faq__maximized-detail-header--button">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="faq__maximized-detail-body">
                                <p class="faq__maximized-detail-body--description">
                                    <?= $this->lang->line($item['body']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>
<?php $this->load->view("partials/_footer.php"); ?>
<?php $this->load->view("partials/_scripts.php"); ?>

