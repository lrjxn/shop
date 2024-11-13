<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

<?php do_action( 'woocommerce_product_meta_start' ); ?>

<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
	<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>
<?php endif; ?>

<?php
// Categories dropdown
$categories = $product->get_category_ids();
if ( ! empty( $categories ) ) :
	$category_options = '';
	foreach ( $categories as $category_id ) :
		$category = get_term( $category_id );
		$category_options .= '<option value="' . esc_attr( $category->term_id ) . '">' . esc_html( $category->name ) . '</option>';
	endforeach;
	echo '<label for="product_categories">' . esc_html__( 'Category:', 'woocommerce' ) . '</label>';
	echo '<select id="product_categories" class="product_meta_dropdown">' . $category_options . '</select>';
endif;
?>

<?php
// Tags dropdown
$tags = $product->get_tag_ids();
if ( ! empty( $tags ) ) :
	$tag_options = '';
	foreach ( $tags as $tag_id ) :
		$tag = get_term( $tag_id );
		$tag_options .= '<option value="' . esc_attr( $tag->term_id ) . '">' . esc_html( $tag->name ) . '</option>';
	endforeach;
	echo '<label for="product_tags">' . esc_html__( 'Tag:', 'woocommerce' ) . '</label>';
	echo '<select id="product_tags" class="product_meta_dropdown">' . $tag_options . '</select>';
endif;
?>

<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>

