<?php 

function cookStore_load_scripts() {
   
    wp_enqueue_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" );
    wp_enqueue_script("popper", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    wp_enqueue_script("j-query", "https://code.jquery.com/jquery-3.2.1.slim.min.js");
    wp_enqueue_script("bootstrap-js","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" );
    wp_enqueue_style("cook-store-style",get_stylesheet_uri());
    wp_enqueue_style("single_recipe", get_stylesheet_directory_uri() . "/style/single-recipe.css"); 

    
}

add_action("wp_enqueue_scripts","cookStore_load_scripts");


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
    )
)


 


?>