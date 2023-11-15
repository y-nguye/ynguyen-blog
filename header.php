<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom">
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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(
                        [
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
                        ]
                    )
                    ?>
                </div>
            </div>
        </nav>

        <div class="container-sm">
            <div class="row">
                <div class="col-md-8">