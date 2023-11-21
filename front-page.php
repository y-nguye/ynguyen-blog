<?php get_header(); ?>

<div class="mt-4">
    <?php dynamic_sidebar('home-page-title-widget'); ?>
</div>

<article class="content">
    <?php
    if (have_posts()) :

        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'archive');
        endwhile;

    endif;
    ?>
</article>

<?php get_footer(); ?>