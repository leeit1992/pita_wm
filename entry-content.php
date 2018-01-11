<!-- Blog Gallery -->
<div class="blog-item">
    <?php
        $postFormat = get_post_format( get_the_ID() );
        switch ( $postFormat ) {
            case '':
            case 'aside':
                $icon = 'pencil';
                break;
            case 'gallery':
                $icon = 'images';
                get_template_part( 'entry-content', 'gallery' );
                break;
            case 'quote':
                $icon = 'quotes-left';
                get_template_part( 'entry-content', 'quote' );
                break;
            case 'video':
                $icon = 'film';
                get_template_part( 'entry-content', 'video' );
                break;
            case 'link':
                $icon = 'link';
                get_template_part( 'entry-content', 'link' );
                break;
            case 'image':
                $icon = 'image';
                get_template_part( 'entry-content', 'image' );
                break;
        }
    ?>
    <?php get_template_part( 'entry', 'meta' ); ?>
    <div class="blog-title">
        <span class="icofont moon-<?php echo $icon; ?>"></span>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <ul>
            <li>
                Posted by
                <a href=""><?php the_author(); ?></a>
            </li>
            <li>
                <?php the_tags(); ?>
            </li>
            <li>
                <?php the_category( ', ' ); ?>
            </li>
            <li>
                <?php $countComment = wp_count_comments( get_the_ID() ); ?>
                <a href=""><?php echo $countComment->total_comments; ?> Comments</a>
            </li>
        </ul>
    </div>

    <div class="blog-detail">
        <?php the_content(); ?>
    </div>
</div>
<!-- End Blog Gallery -->
