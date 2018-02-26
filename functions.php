<?php 

add_action('after_setup_theme', 'fabrics_theme_setup');

function fabrics_theme_setup(){

	add_theme_support('title-tag');

	add_theme_support('woocommerce');
}


/**
 * Enqueue scripts and styles.
 */
require_once get_template_directory() .'/inc/theme_all_files.php';





/**
*
* shop page
*/

// count + ordering system

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


/**
*
* shop page title
*/
add_filter('woocommerce_show_page_title', 'fabrices_shop_page_title');

function fabrices_shop_page_title(){ ?>

		<h2 class=" product-tile woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h2>

<?php }




/***
* test
*
*/

/**
*
* link wrapper has been removed  
* <a href=""></a>
*/
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);



/**
* 
* remove sale_flash
*/
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);




/**
*
* prodcut thumbnail er wrapper
*
*/
add_action('woocommerce_before_shop_loop_item_title', 'product_er_image_wrapper', 5);

function product_er_image_wrapper(){

	echo '<div class="product-thumb">';

}




/**
*
* add_to_cart er wrapper
*
*/
add_action('woocommerce_after_shop_loop_item', 'add_to_cart_wrapper', 9);

function add_to_cart_wrapper(){
	echo '<div class="product-hover">';
}



/**
*
* add_to_cart er wrapper end
*
*/
add_action('woocommerce_after_shop_loop_item', 'add_to_cart_wrapper_end', 11);

function add_to_cart_wrapper_end(){
	echo '</div></div>';
}




/**
*
* product er title
*
*/
add_action('woocommerce_shop_loop_item_title', 'loop_product_title_er_wrapper', 9);

function loop_product_title_er_wrapper(){
	echo '<div class="product-text">';
}




/**
*
* price er sese product_title er wrapper end
*
*/
add_action('woocommerce_after_shop_loop_item_title', 'loop_product_title_er_wrapper_end', 15);

function loop_product_title_er_wrapper_end(){
	echo '</div>';
}


/**
* product title er mark up
*
*/
function woocommerce_template_loop_product_title() { ?>
		
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


<?php }




/**
* remove rating from shop page
*
*/
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);






