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
                    
                    <?php get_search_form(); ?>
                    <span>Tru typing <b>Cook...</b></span>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
    <div class="books-header mt-3 ">
        <h2 class="text-center">Our Content</h2>
    </div>
        <div class="row align-content-center text-center mt-4 ">
        <div class="col-12 col-md-6">
        <button type="button" class="btn ">Recipies</button>
        </div>
        <div class="col-12 col-md-6">
        <button type="button" class="btn ">Books</button>
        </div>
        </div>
    </div>
  

<?php endwhile; else: echo '<p>No post have been added </p>'; endif; get_footer(); ?>