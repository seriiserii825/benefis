<?php
	/**
	 * Single Product Price
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see     https://docs.woocommerce.com/document/template-structure/
	 * @package WooCommerce/Templates
	 * @version 3.0.0
	 */

	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	}


	global $product;
	global $woocommerce;

	require_once __DIR__.'/../../inc/func-woocommerce.php';

?>

<div class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?>">
	<?php
		$type = $product->get_attribute('type_custom');
		$type_arr = explode(', ', $type);
		$currency = get_woocommerce_currency();
		$currency_symbol = get_woocommerce_currency_symbol();


		global $product;
		$id = $product->get_id();
		$adult_id = 1597;
		$small_id = 1598;

		$adult_variation_price = get_variation_price_by_id($id, $adult_id);
		$adult_variation_regular_price =  $adult_variation_price->display_regular_price;
		$adult_variation_sale_price = $adult_variation_price->display_price;

		$small_variation_price = get_variation_price_by_id($id, $small_id);
		$small_variation_regular_price =  $small_variation_price->display_regular_price;
		$small_variation_sale_price = $small_variation_price->display_price;
	?>

    <div class="price-item price-adult">
        <span class="valute"><?php echo $currency; ?></span>
        <span class="number regular"><?php echo $adult_variation_regular_price; ?></span>
        <span class="number sale"><?php echo $adult_variation_sale_price; ?></span>
        <span> - </span>
        <span><?php echo $type_arr[0]; ?></span>
    </div>
    <div class="price-item price-small">
        <span class="valute"><?php echo $currency; ?></span>
        <span class="number regular"><?php echo $small_variation_regular_price; ?></span>
        <span class="number sale"><?php echo $small_variation_sale_price; ?></span>
        <span> - </span>
        <span><?php echo $type_arr[1]; ?></span>
    </div>



    <div class="currency-switcher">
        <span>currency: </span><?php echo do_shortcode('[woocommerce_currency_switcher_link_list]'); ?>
    </div>


	<?php

		//	    vardump($product->get_sale_price());
		//	    vardump($product->get_regular_price());
		//	    vardump(get_woocommerce_currency());
		//	    vardump(get_woocommerce_currency_symbol());
		//        vardump(get_option('woocommerce_currency'));

	?>
</div>


