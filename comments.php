<?php if (comments_open()) : ?>
    <div class="comments-wraper mt-5">
        <div class="comments-inner">
            <?php
            wp_list_comments(
                [
                    'avatar_size' => 50,
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
                    'logged_in_as' => '',

                    'title_reply_before' => '<h3 class="pt-3">',
                    'title_reply' => 'Bình luận',
                    'title_reply_after' => '</h3>',

                    'comment_field' => '<div class="form-group pb-4"><textarea name="comment" id="comment" cols="20" rows="5" class="form-control"></textarea></div>',
                    'comment_field_before' => '<div class="form-group">',
                    'comment_field_after' => '</div>',
                    'fields' => [
                        'author' => '<div class="row mb-3"><div class="col-md-4"><input class="form-control mb-2" placeholder="Tên *" id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required="required"></div>',
                        'email' => '<div class="col-md-4"><input class="form-control mb-2" placeholder="Email *" id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email" required="required"></div>',
                        'url' => '<div class="col-md-4"><input class="form-control mb-2" placeholder="Trang web" id="url" name="url" type="text" value="" size="30" maxlength="200" autocomplete="url"></div></div>',
                    ],
                    'cancel_reply_before' => '<div class="mt-2">',
                    'cancel_reply_after' => '</div>',

                    'label_submit' => 'Gửi bình luận',
                    'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn btn-primary float-end %3$s" value="%4$s" />'
                ]
            );
        }
        ?>
    </div>
<?php endif; ?>