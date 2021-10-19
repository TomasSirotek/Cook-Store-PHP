<?php
get_header();
$button = get_field('buy_btn'); 
?>
<div class="container mt-5 single-book">
        <main class="row text-center" id="home" >
            <div class="col-12 col-md-6">
                <img  src="<?php the_field("book_image")?>" alt="" width="300">
            </div>
            <div class="col-12 col-md-6">
                <?php while(have_posts()): the_post()?>
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content() ?></p>
                <a class="btn btn-primary different-btn btn-lg" role='button' href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                <?php endwhile ?>
            </div>
        </main>
    </div>
<?php get_footer(); ?>