<div>
    <hr>
    <h4 class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <div class="contents">
        <div class="meta mb-2">
            <span class="date me-0"><?php the_time('j F, Y'); ?></span>
            <?php if (comments_open()) : ?>
                <span><i class="bi bi-dot align-middle"></i><?php comments_number(); ?></span>
            <?php endif; ?>
        </div>
        <?php if (has_post_thumbnail()) : ?>
            <img class="img-fluid mt-1 mb-2" src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail">
        <?php endif; ?>
        <div class="intro">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="d-inline-block mb-2 more-link link-primary">Đọc tiếp &rarr;</a>
    </div>
</div>