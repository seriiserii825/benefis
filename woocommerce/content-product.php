<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<!--<li <?php wc_product_class('', $product); ?>>
	<?php
/**
 * Hook: woocommerce_before_shop_loop_item.
 *
 * @hooked woocommerce_template_loop_product_link_open - 10
 */
//do_action( 'woocommerce_before_shop_loop_item' );

/**
 * Hook: woocommerce_before_shop_loop_item_title.
 *
 * @hooked woocommerce_show_product_loop_sale_flash - 10
 * @hooked woocommerce_template_loop_product_thumbnail - 10
 */
//do_action( 'woocommerce_before_shop_loop_item_title' );

/**
 * Hook: woocommerce_shop_loop_item_title.
 *
 * @hooked woocommerce_template_loop_product_title - 10
 */
//do_action( 'woocommerce_shop_loop_item_title' );

/**
 * Hook: woocommerce_after_shop_loop_item_title.
 *
 * @hooked woocommerce_template_loop_rating - 5
 * @hooked woocommerce_template_loop_price - 10
 */
//do_action( 'woocommerce_after_shop_loop_item_title' );

/**
 * Hook: woocommerce_after_shop_loop_item.
 *
 * @hooked woocommerce_template_loop_product_link_close - 5
 * @hooked woocommerce_template_loop_add_to_cart - 10
 */
//do_action( 'woocommerce_after_shop_loop_item' );
?>
</li>-->

<?php
$image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');
?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-padd hidden-md product-loop">
    <div class="single-product">
        <div class="product-label">

        </div>
        <div class="product-img">
            <a href="<?php the_permalink(); ?>">
                <img class="primary-image" src="<?php echo $image[0]; ?>" alt=""/>
            </a>
        </div>
        <div class="product-content">
            <h2 class="product-name">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <div class="price-box">
                <span class="new-price">
                    <?php if ($price_html = $product->get_price_html()) : ?>
                        <span class="price">
                             Ребенок - Взрослый:<br><?php echo $price_html; ?>
                        </span>
	                <?php endif; ?>
                </span>
            </div>
        </div>
        <div class="product-content2">
            <h2 class="product-name">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <div class="price-box">
                                                                    <span class="new-price"><?php if ($price_html = $product->get_price_html()) : ?>
                                                                            <span class="price">
                                                                                Ребенок - Взрослый
                                                                                :<br><?php echo $price_html; ?></span>
	                                                                    <?php endif; ?></span>
            </div>
            <div class="button-container">
                <a title="В корзину" href="<?php the_permalink(); ?>" class="button cart_button">
                <span>Подробнее</span>
                </a>
            </div>
        </div>

    </div>
</div>