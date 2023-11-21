<?php get_header(); ?>

<h1 class="mt-4"><?php the_title() ?></h1>
<article class="content mt-4">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }
    the_posts_pagination();
    ?>
</article>

<?php get_footer(); ?>