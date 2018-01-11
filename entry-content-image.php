<?php
	$gallery = get_post_meta( get_the_ID(), "pita_gallery", true);
?>
<div class="blog-image">
    <a href="#">
        <img src="<?php echo wp_get_attachment_url( $gallery[0] ); ?>" alt="<?php the_title(); ?>">
    </a>
</div>