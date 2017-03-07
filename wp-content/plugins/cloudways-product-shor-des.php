<?php
/*
 * Plugin Name: Cloudways Display Product Short Descriptions in WooCommerce
 * Description: Add product short descriptions to the loop in product archive pages
 * Version: 1.0
 */

function cloudways_short_des_product() {
	echo '<div class="excerpt">';
	echo get_ecommerce_excerpt();
	echo '</div>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'cloudways_short_des_product', 40 );