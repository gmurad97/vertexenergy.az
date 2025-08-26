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
                                <h1 class="description-block-main__heading--title">404</h1>
                                <h1 class="description-block-main__heading--title"><?= $this->lang->line("page_not_found"); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php $this->load->view("partials/_scripts.php"); ?>

