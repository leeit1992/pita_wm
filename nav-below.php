<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<ul class="pagination">
	<li style="display: none" class="">
        <?php next_posts_link( __( 'prev', 'pita_wm' ) ) ?>
    </li>
    <li class="">
        <?php previous_posts_link( __( 'next', 'pita_wm' ) ) ?>
    </li>
</ul>
<?php } ?>