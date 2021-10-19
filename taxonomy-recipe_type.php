<?php
get_header(); ?>
<div class="container mt-4">
<div class="row justify-content-center">
    <div class="header-types">
        <h2 class="">
            <?php 
                $term = get_term_by( 'slug', get_query_var( 'recipe_type' ), get_query_var( 'taxonomy' ) ); 
                echo $term->name; 
            ?>
        </h2>
    </div>
</div>
<div class="row justify-content-center mt-5">
        <?php while(have_posts()): the_post() ?>
        <div class="col py-4 mx-3">
            <a href="<?php the_permalink() ?>">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" alt="Card image cap" src="<?php the_field("recipe_image")?>" alt="logo" width="100%" height="300"  >
        <div class="card-body">
            <h5 class="card-title"><?php the_title() ?></h5>
            <p class="card-text">Servings:<?php the_field("servings") ?></p>
            <p class="card-text">Prep Time :<?php the_field("prep_time") ?></p>
        </div>
        <div class="card-footer border-top-0 ">
            <div class="text-center">
                <div class="price mt-auto">
                    <span><?php the_field("difficulty") ?></span>
            </div>
        </div>
      </div>
    </div>
  </a>
</div>
    <?php endwhile ?>
    </div>
</div>

    
<?php get_footer(); ?>







