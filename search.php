<?php get_header(); ?>

<article class="content fs-5">

    <header class="mt-4">
        <h1>
            <?php printf(
                esc_html__('Kết quả tìm kiếm cho: %s'),
                '<span>' . get_search_query() . '</span>'
            );
            ?>
        </h1>
    </header>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    } else {
        echo '<p>' . esc_html__('No results found.') . '</p>';
    }
    ?>
</article>

<?php get_footer(); ?>