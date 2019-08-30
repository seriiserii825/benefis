<?php

	defined('ABSPATH') || exit;

	function woocommerce_template_loop_product_thumbnail()
	{
		echo '<div class="product-img"><a href="' . get_the_permalink() . '">';
		echo woocommerce_get_product_thumbnail('full');
		echo '</a></div>';
	}

	function woocommerce_template_loop_product_title()
	{
		echo '<div class="product-content">
			<h2 class="product-name">
                <a href="' . get_permalink() . '">' . get_the_title() . '</a>
            </h2>';

	}

//	// Get Woocommerce variation price based on product ID
//	function get_variation_price_by_id($product_id, $variation_id)
//	{
//		$currency_symbol = get_woocommerce_currency_symbol();
//		$product = new WC_Product_Variable($product_id);
//		$variations = $product->get_available_variations();
//		$var_data = [];
//		foreach ($variations as $variation) {
//			if ($variation['variation_id'] == $variation_id) {
//				$display_regular_price = $variation['display_regular_price'] . '<span class="currency">' . $currency_symbol . '</span>';
//				$display_price = $variation['display_price'] . '<span class="currency">' . $currency_symbol . '</span>';
//			}
//		}
//
//		//Check if Regular price is equal with Sale price (Display price)
//		if ($display_regular_price == $display_price) {
//			$display_price = false;
//		}
//
//		$priceArray = array(
//			'display_regular_price' => $display_regular_price,
//			'display_price' => $display_price
//		);
//		$priceObject = (object)$priceArray;
//		return $priceObject;
//	}
//
//	add_filter('woocommerce_get_price_html', 'func_change_price', 100, 2);

	add_filter('woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3);
	function my_custom_sale_flash($text, $post, $_product)
	{
		return ' <span class="onsale">15%</span> ';
	}

	function func_change_price($price, $product)
	{
		//		vardump($product->get_sale_price());
		//		vardump($product->get_regular_price());
		//		vardump(get_woocommerce_currency());
		//		vardump(get_woocommerce_currency_symbol());
		//		vardump(wc_price($product->get_price()));
		////		vardump(get_option('woocommerce_currency'));
	}
