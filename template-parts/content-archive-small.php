<div>
    <hr>
    <div class="d-flex align-items-center">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <img class="img-mini rounded" src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail">
            </a>
        <?php else : ?>
            <a href="<?php the_permalink(); ?>">
                <img class="img-mini rounded border" src="<?= get_template_directory_uri() . '/assets/img/no-image.png' ?>" alt="thumbnail">
            </a>
        <?php endif; ?>
        <div class="ms-4">
            <h4 class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <div class="meta">
                <span class="date me-0"><?php the_time('j F, Y'); ?></span>
                <?php if (comments_open()) : ?>
                    <span class="dot-comments-info"><span><i class="bi bi-dot align-middle"></i></span><?php comments_number(); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>