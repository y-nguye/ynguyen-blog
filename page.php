<?php get_header(); ?>

<h1 class="mt-4"><?php the_title() ?></h1>
<article class="content">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'page');
        }
    }
    ?>
</article>

<?php get_footer(); ?>