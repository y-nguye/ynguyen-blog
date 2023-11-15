<div class="">
    <!-- Thời gian và tags -->
    <header>
        <div class="meta fs-6 mb-4">
            <span class="date"><?= the_date() ?></span>
            <!-- Lặp lại thêm một thẻ để áp dụng cho nhiều tags -->
            <?php the_tags('<span class="tag"><i class="bi bi-tag-fill align-middle"></i> ', '</span><span class="tag"><i class="bi bi-tag-fill align-middle"></i> ', '</span>') ?>
        </div>
    </header>

    <div class="contents">
        <?php the_content(); ?>
    </div>

    <?php comments_template(); ?>
</div>