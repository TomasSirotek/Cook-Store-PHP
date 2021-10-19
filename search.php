<?php

get_header();

if ( have_posts() ) :
	?>
    <h2 class="text-center py-3">Search results for "<?php the_search_query(); ?>"</h2>
	<?php
	while ( have_posts() ) : the_post(); ?>

    <div class="container all-posts">
            <div class="row">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="result-title">
                    <a  href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'first-thumbnail' ); ?></a>
                </div>
			<?php } ?>
                <div class="col justify-content-center exact-post mb-3">
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                <h4 class="post-meta"><?php the_time( 'F jS, Y' ); ?> | <a
                href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
                | <?php
				$categories = get_the_category();
				$comma      = ', ';
				$output     = '';
				
				if ( $categories ) {
					foreach ( $categories as $category ) {
						$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
					}
					echo trim( $output, $comma );
				} ?>
            </h4>
            <p>
				<?php echo get_the_excerpt() ?>
                <a href="<?php the_permalink() ?>">Read more &raquo</a>
            </p>
                </div>
            </div>
        </div>
	
	<?php endwhile;

else :
	echo '<p>Sorry we could not find what you looking for ! Try again</p>';

endif;

get_footer();

?> 
 
 