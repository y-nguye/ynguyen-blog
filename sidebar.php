<div class="sidebar col-md-4 ps-5 mt-4">
    <div class="mt-2">
        <?php dynamic_sidebar('header-sidebar-widget'); ?>
    </div>
    <div class="mt-3">
        <?php
        // Hiển thị cây danh sách chuyên mục
        wp_list_categories(
            [
                'orderby' => 'name',
                'title_li' => '', // Ẩn tiêu đề chuyên mục
            ]
        );
        ?>
    </div>
    <div class="mt-4">
        <hr>
        <h5 class="tags">Tags</h5>
        <?php
        wp_tag_cloud([
            'smallest' => 0.875,  // Kích thước nhỏ nhất của thẻ
            'largest' => 0.875,   // Kích thước lớn nhất của thẻ
            'unit' => 'rem',    // Đơn vị kích thước
            'order' => 'DESC',
            'orderby' => 'count',
        ]);
        ?>
    </div>
</div>