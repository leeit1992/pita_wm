<?php
get_header();
global $pita_wm_option;
echo do_shortcode(isset($pita_wm_option['pita_wm-post-detail-head']) ? $pita_wm_option['pita_wm-post-detail-head'] : ''); ?>
?>
<!-- Blog -->
<div id="content-blog">
    <div class="container">
        <div class="row">
            <!-- Blog Left -->
            <div class="col-md-9">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
				<?php endwhile; endif; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
            </div>

            <div class="col-md-3 blog-list-right">

                <?php dynamic_sidebar('pita_wm_1'); ?>

            <!-- End Blog Right --> 
            </div>
        </div>
    </div>
</div>

<?php 
echo do_shortcode(isset($pita_wm_option['pita_wm-post-detail-footer']) ? $pita_wm_option['pita_wm-post-detail-footer'] : '');
get_footer(); 
?>
