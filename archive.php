<?php get_header(); ?>
<?php
// Sử dụng hàm has_child_category_by_name để kiểm tra
$category_name_to_check = single_cat_title('', false);
$child_categories = has_child_category_by_name($category_name_to_check);
?>

<?php if (is_category()) : ?>
    <?php if ($child_categories) : ?>
        <h1 class="mt-4">Các bài viết về <?= single_cat_title(); ?></h1>
    <?php else : ?>
        <h1 class="mt-4"><?= single_cat_title(); ?></h1>
    <?php endif; ?>
<?php endif; ?>

<?php if (category_description()) : ?>
    <div class="fs-5"><?= category_description(); ?></div>
<?php endif; ?>

<article class="content fs-5">
    <?php if (have_posts()) :
        while (have_posts()) : ?>
            <?php the_post(); ?>
            <?php if ($child_categories) : ?>
                <!-- Chuyên mục có chuyên mục con -->
                <?php get_template_part('template-parts/content', 'archive-parent'); ?>
            <?php else : ?>
                <!-- Chuyên mục không có chuyên mục con -->
                <?php get_template_part('template-parts/content', 'archive'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php the_posts_pagination(); ?>
</article>

<?php get_footer(); ?>