<?php
	/**
	 * The template for displaying product content in the single-product.php template
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see     https://docs.woocommerce.com/document/template-structure/
	 * @package WooCommerce/Templates
	 * @version 3.6.0
	 */

	defined('ABSPATH') || exit;

	global $product;

	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked wc_print_notices - 10
	 */
	do_action('woocommerce_before_single_product');

	if (post_password_required()) {
		echo get_the_password_form(); // WPCS: XSS ok.
		return;
	}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
				do_action( 'woocommerce_before_single_product_summary' );
	?>
<!--    <div class="product-images">-->
<!--        <div class="product-image-big">-->
<!--            <a href="#js-product-image-big__images" class="woocommerce-product-gallery__trigger" id="js-woocommerce-product-gallery__trigger">-->
<!--                <img draggable="false" class="emoji" alt="🔍" src="https://s.w.org/images/core/emoji/12.0.0-1/svg/1f50d.svg">-->
<!--            </a>-->
<!--            <div class="product-image-big__images" id="js-product-image-big__images">-->
<!--                <div class="product-image-big__images-wrap">-->
<!--                    <a href="--><?php //echo get_template_directory_uri() . '/img/product-single/1.jpg'; ?><!--" class="img-wrap">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/1.jpg'; ?><!--" alt="#1">-->
<!--                    </a>-->
<!--                    <a href="--><?php //echo get_template_directory_uri() . '/img/product-single/2.jpg'; ?><!--" class="img-wrap">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/2.jpg'; ?><!--" alt="#2">-->
<!--                    </a>-->
<!--                    <a href="--><?php //echo get_template_directory_uri() . '/img/product-single/3.jpg'; ?><!--" class="img-wrap">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/3.jpg'; ?><!--" alt="#3">-->
<!--                    </a>-->
<!--                    <a href="--><?php //echo get_template_directory_uri() . '/img/product-single/4.jpg'; ?><!--" class="img-wrap">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/4.jpg'; ?><!--" alt="#4">-->
<!--                    </a>-->
<!--                    <a href="--><?php //echo get_template_directory_uri() . '/img/product-single/5.jpg'; ?><!--" class="img-wrap">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/5.jpg'; ?><!--" alt="#5">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <ul class="product-image-gallery" id="js-product-image-gallery">-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/small/1.jpg'; ?><!--" alt="#1">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/small/2.jpg'; ?><!--" alt="#2">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/small/3.jpg'; ?><!--" alt="#3">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/small/4.jpg'; ?><!--" alt="#4">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/img/product-single/small/5.jpg'; ?><!--" alt="#5">-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action('woocommerce_single_product_summary');
	?>


</div>
<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
