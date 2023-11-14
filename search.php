<?php get_header(); ?>

<article class="content fs-5">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            // Đối số thứ nhất: Tìm file theo đường dẫn
            // Đối số thứ hai: gán hậu tố vào tên file sau dấu gạch nối
            // Điều này giúp cho module hoá dự án: Thời gian, tên tác giả, nội dung,...
            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>
</article>

<?php get_footer(); ?>