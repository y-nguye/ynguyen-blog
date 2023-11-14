<div>
    <hr>
    <h4 class="archive-title fs-3 mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <div class="contents">
        <div class="meta mb-2">
            <span class="date fs-6"><?php the_time('j F, Y'); ?></span>
            <?php if (comments_open()) : ?>
                <span class="comment fs-6"><i class="bi bi-dot align-middle"> </i><?php comments_number(); ?></span>
            <?php endif; ?>
        </div>
        <?php if (has_post_thumbnail()) : ?>
            <img class="img-fluid mb-3" src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail">
        <?php endif; ?>
        <div class="intro">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="more-link link-primary fs-5">Đọc tiếp &rarr;</a>
    </div>
</div>