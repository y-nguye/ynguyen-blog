<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <main class="pb-4 appearance">
        <nav id="back-to-top" class="navbar navbar-expand-lg sticky-top bg-white border-bottom">
            <div class="container-sm">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo           = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>

                <?php if ($logo) : ?>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo-blog"></a>
                <?php endif; ?>

                <a class="nav-link me-3" href="<?php echo home_url(); ?>">
                    <?php echo get_bloginfo('name') ?>
                </a>

                <button type="button" title="Chuyển đổi giao diện" class="btn navbar-toggler ms-auto appearance-btn navbar-toggler-appearance-btn">
                    <i class=" bi bi-moon align-middle"></i>
                </button>
                <button type="button" class="navbar-toggler navbar-toggler-btn" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list align-middle"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(
                        [
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav mb-2 mb-lg-0 w-100">%3$s</ul>',
                        ]
                    )
                    ?>
                </div>
            </div>
        </nav>

        <div class="container-sm">
            <div class="row">
                <div class="col-md-8">