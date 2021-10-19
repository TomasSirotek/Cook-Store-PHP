<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
 ?>
<section class="main"  style="
    background-image:url(<?php the_field('recipe-hero')?>);">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2><?php the_title() ?></h2>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <div class="info-section mt-4">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6 ">
                    <div class="main-header-time text-center mb-3">
                       <span><b>Estimate time:</b> <?php the_field("prep_time") ?></span><br>
                       <span><b>Difficulty:</b> <?php the_field("difficulty") ?></span><br>
                        <span><b>Servings:</b> <?php the_field("servings") ?></span>
                    </div>
                    <div class="main-text-left text-justify mt-5">
                    <?php the_content() ?>
                    </div>
               
                </div>
                <div class="col-12 col-md-6 main-col-right">
                    <div class="main-header-title text-center">
                        <span>Ingrediences</span>
                    </div>
                    <div class="main-title-right mt-5">
                       <p>
                       <?php the_field("ingredients") ?>
                       </p>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; else: echo '<p>No post have been added </p>'; endif; get_footer(); ?>