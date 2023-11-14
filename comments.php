<?php if (comments_open()) : ?>
    <div class="comments-wraper mt-5">
        <hr />
        <div class="comments-header fs-4">
            <div class="mb-3">
                <?php
                if (!have_comments()) {
                    echo "Hãy là người đầu tiên bình luận nào!";
                } else {
                    echo get_comments_number() . " bình luận";
                }
                ?>
            </div>
        </div>

        <div class="comments-inner">
            <?php
            wp_list_comments(
                [
                    'avatar_size' => 120,
                    'style' => 'div',
                ]
            );
            ?>
        </div>

        <?php
        if (comments_open()) {
            comment_form(
                [
                    'class_form' => '',
                    'title_reply_before' => '<h5>',
                    'title_reply_after' => '</h5>',
                ]
            );
        }
        ?>
    </div>
<?php endif; ?>