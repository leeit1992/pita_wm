<?php
	get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) );
?>