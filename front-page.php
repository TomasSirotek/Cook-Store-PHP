<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
 ?>

<section class="main-heros" style="
    background-image:url(<?php the_field('hero_img')?>);">
        
       <div class="col-sm-12 col-md-12 text-center">
                    <h2 class='font'>
                        <?php the_title() ?>
                    </h2>
                    <p><?php the_content() ?></p>
                    
                    <div class="row justify-content-center">
                    <?php get_search_form(); ?> 
                 
                    </div>
                    <span>Try typing <b>Cook...</b></span>
                    
                </div>
            </div>
        </div>
    </section>


<div class="container">
<div class="row book-container justify-content-center" >
                    <h2>Our Books</h2>
                    </div>
                    <div class="mt-4 ">
                    <?php
                        $args = array(
                        'post_type'   => 'book',
                        'post_status' => 'publish',
                        
                        );
                        
                        $book = new WP_Query( $args );
                        if( $book->have_posts() ) :
                        ?>
                        <div class="row">
                        <?php
                            while( $book->have_posts() ) :
                                $book->the_post();
                                ?>
                        <div class="col specific">
                        <div class="card h-100" style="width: 18rem;">
                            <img class="card-img-top" alt="Card image cap" src="<?php the_field("book_image")?>" alt="logo" width="100%" height="300"  >
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <p class="card-text">Author:<?php the_field("author") ?></p>
                        </div>
                        <div class="card-footer border-top-0 ">
                            <div class="text-center">
                                <div class="routing mt-auto">
                                <a href="<?php the_permalink() ?>">
                                <span>Click here for more Info !</span>
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    <?php
    else :
    esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
    endif;
    ?>
</div>
</div>


  

<?php endwhile; else: echo '<p>No post have been added </p>'; endif; get_footer(); ?>