<ol class="comment-list">
    <?php
    wp_list_comments(
        array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 42,
        )
    );
    ?>
</ol><!-- .comment-list -->
<?php
comment_form(
    array(
        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h2>',
    )
);
?>