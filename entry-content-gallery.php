<div id="owl-blog-list">
	<?php
		$gallery = get_post_meta( get_the_ID(), "pita_gallery", true);
		foreach ($gallery as $value): ?>
			<div class="item">
	        	<img src="<?php echo wp_get_attachment_url( $value ); ?>" alt="">
	    	</div>
	<?php endforeach ?>
</div>
