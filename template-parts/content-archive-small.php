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
        <div class="contents ms-4">
            <h4 class="archive-title fs-4 mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <div class="meta">
                <span class="date fs-6"><?php the_time('j F, Y'); ?></span>
                <?php if (comments_open()) : ?>
                    <span class="fs-6"><i class="bi bi-dot align-middle"> </i><?php comments_number(); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>