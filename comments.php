<?php if ( get_comment_pages_count() > 0 ): ?>
    <div class="blog-comment">
        <h2 class="title-right-blog">
            Comments
            <span>(<?php echo get_comment_pages_count(); ?>)</span>
        </h2>
        <?php foreach ($comments as $comment): ?>

            <div class="comment-item">
                <div class="img-comment">
                    <img src="<?php get_avatar( get_comment_author_email()); ?>" alt="">
                </div>
                <span class="user-comment"><?php comment_author(); ?></span>
                <span class="date-comment"><?php comment_date(); ?> at <?php comment_time(); ?></span>
                <p class="detail-comment">
                    <?php echo get_comment_text(); ?>
                </p>
                <a class="reply-comment" title="Reply">
                    <span class="fa-reply"></span>
                    Reply
                </a>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>

<?php
if ( comments_open() ) {
	?>
	<div class="blog-leave-reply">
        <h2 class="title-right-blog">LEAVE A REPLY</h2>
        <div class="row">
            <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentform">
            	<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
                <div class="col-sm-4">
                    <input type="text" id="name" name="author" onfocus="if(this.value == 'Name*') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name*'; }" value="Name*"/></div>
                <div class="col-sm-4">
                    <input type="text" id="email" name="email" onfocus="if(this.value == 'Email*') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email*'; }" value="Email*"/></div>
                <div class="col-sm-4">
                    <input type="text" id="website" name="url" onfocus="if(this.value == 'Website') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Website'; }" value="Website"/></div>
                    <div class="clear"></div>
                <div class="col-xs-12">
                    <textarea name="comment" onfocus="if(this.value == 'Comment*') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Comment*'; }">Comment*</textarea>
                </div>
                <div class="clear"></div>
                <div class="col-sm-12">
                    <button type="submit">POST COMMENT</button>
                </div>
            </form>
        </div>
    </div>
	<?php
}
?>
