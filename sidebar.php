<div class="sidebar col-md-4 ps-5 mt-4">
    <div class="mt-2">
        <?php dynamic_sidebar('header-sidebar-widget'); ?>
    </div>
    <div class="mt-3 fs-5">
        <?php
        // Hiển thị cây danh sách chuyên mục
        wp_list_categories(array(
            'orderby' => 'name',
            'title_li' => '', // Ẩn tiêu đề chuyên mục
        ));
        ?>
    </div>
</div>