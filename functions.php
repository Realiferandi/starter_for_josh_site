<?php
function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );
wp_enqueue_style( 'tester', get_stylesheet_directory_uri() . '/css/animate.min.css' );    
wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false);
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '', true );
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
add_theme_support('post-thumbnails'); 
?>
<?php
function add_menu_link_class( $atts, $item, $args ) {
if($args->link_class) {$atts['class'] = $args->link_class;
}
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
function add_menu_list_item_class($classes, $item, $args) {
if($args->list_item_class){$classes[] = $args->list_item_class;
                          }return $classes;
    }
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
?>
<?php
	if ( get_field(' headerbackgroundimage') ) {
		echo 'style="background: url(' . get_field(' headerbackgroundimage') . ')"';
	}
?>
<?php
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');

function sk_wow_init_in_footer() {
add_action( 'print_footer_scripts', 'wow_init' );
 
}


function wow_init() { ?>
<script type="text/javascript">
new WOW().init();
 </script>    
<?php }


