<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

// defined('ABSPATH') || exit;

// get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action('woocommerce_before_main_content');

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
// do_action('woocommerce_shop_loop_header');

// if (woocommerce_product_loop()) {

/**
 * Hook: woocommerce_before_shop_loop.
 *
 * @hooked woocommerce_output_all_notices - 10
 * @hooked woocommerce_result_count - 20
 * @hooked woocommerce_catalog_ordering - 30
 */
// do_action('woocommerce_before_shop_loop');

// woocommerce_product_loop_start();

// if (wc_get_loop_prop('total')) {
// 	while (have_posts()) {
// 		the_post();

// 		/**
// 		 * Hook: woocommerce_shop_loop.
// 		 */
// 		do_action('woocommerce_shop_loop');

// 		wc_get_template_part('content', 'product');
// 	}
// }

// woocommerce_product_loop_end();

/**
 * Hook: woocommerce_after_shop_loop.
 *
 * @hooked woocommerce_pagination - 10
 */
// 	do_action('woocommerce_after_shop_loop');
// } else {
/**
 * Hook: woocommerce_no_products_found.
 *
 * @hooked wc_no_products_found - 10
 */
// 	do_action('woocommerce_no_products_found');
// }

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action('woocommerce_sidebar');

// get_footer( 'shop' );
?>

<?php
defined('ABSPATH') || exit;
get_header();
?>
<main id="main" class="">
	<div class="shop-page-title category-page-title page-title ">
		<div class="page-title-inner flex-row  medium-flex-wrap container">
			<div class="flex-col flex-grow medium-text-center">
				<div class="is-medium">
					<nav class="woocommerce-breadcrumb breadcrumbs ">
						<a href="<?php echo home_url(); ?>">Trang chủ</a>
						<span class="divider">/</span> <span style="font-size: 18px; color: #000">Cửa hàng</span>
					</nav>
				</div>

				<div class="category-filtering category-filter-row show-for-medium">
					<a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
						<i class="icon-equalizer"></i>
						<strong>Lọc</strong>
					</a>
					<div class="inline-block">
					</div>
				</div>
			</div>
			<div class="flex-col medium-text-center">
				<?php woocommerce_result_count(); ?>
				<?php woocommerce_catalog_ordering(); ?>
				<!-- do_action('woocommerce_before_shop_loop'); hoặc là dùng cái này -->
			</div>
		</div>
	</div>
	<div class="row category-page-row">
		<div class="col large-3 hide-for-medium ">
			<div id="shop-sidebar" class="sidebar-inner col-inner">
				<aside id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories">
					<?php dynamic_sidebar('secondary-sidebar'); ?>
				</aside>
			</div>
		</div>
		<div class="col large-9">
			<div class="shop-container">
				<div class="woocommerce-notices-wrapper"></div>
				<div class="products row row-small large-columns-3 medium-columns-3 small-columns-2 has-equal-box-heights equalize-box">
					<?php
					// Lấy các sản phẩm từ WooCommerce
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 9, // Số lượng sản phẩm muốn hiển thị
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
					);

					$loop = new WP_Query($args);

					if ($loop->have_posts()) :
						while ($loop->have_posts()) : $loop->the_post();
							global $product; // Lấy thông tin sản phẩm hiện tại
					?>
							<div class="product-small col has-hover product type-product post-<?php echo get_the_ID(); ?> status-publish instock <?php echo implode(' ', wp_get_post_terms(get_the_ID(), 'product_cat', array('fields' => 'slugs'))); ?> has-post-thumbnail shipping-taxable purchasable product-type-simple">
								<div class="col-inner">
									<div class="badge-container absolute left top z-1">
									</div>
									<div class="product-small box ">
										<div class="box-image">
											<div class="image-fade_in_back">
												<a href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">
													<?php echo woocommerce_get_product_thumbnail(); // Hiển thị hình ảnh sản phẩm 
													?>
												</a>
											</div>
										</div>
										<div class="box-text box-text-products">
											<div class="title-wrapper">
												<p class="name product-title woocommerce-loop-product__title">
													<a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php the_title(); ?></a>
												</p>
											</div>
											<div class="price-wrapper">
												<span class="price"><?php echo $product->get_price_html(); // Hiển thị giá sản phẩm 
																	?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
					<?php
						endwhile;
						// do_action('woocommerce_after_shop_loop');
						woocommerce_pagination();
						wp_reset_postdata(); // Đặt lại dữ liệu sau khi kết thúc vòng lặp
					else :
						echo '<p>' . __('No products found') . '</p>'; // Thông báo nếu không có sản phẩm
					endif;
					?>
				</div>

				<!-- row -->
				<!-- <div class="container">
					woocommerce_pagination();
					<nav class="woocommerce-pagination">
						<ul class="page-numbers nav-pagination links text-center">
							<li><span aria-current="page" class="page-number current">1</span></li>
							<li><a class="page-number" href="https://happyliving.com.vn/cua-hang/page/2/">2</a></li>
							<li><a class="page-number" href="https://happyliving.com.vn/cua-hang/page/3/">3</a></li>
							<li><a class="page-number" href="https://happyliving.com.vn/cua-hang/page/4/">4</a></li>
							<li><span class="page-number dots">&hellip;</span></li>
							<li><a class="page-number" href="https://happyliving.com.vn/cua-hang/page/6/">6</a></li>
							<li><a class="page-number" href="https://happyliving.com.vn/cua-hang/page/7/">7</a></li>
							<li><a class="page-number" href="https://happyliving.com.vn/cua-hang/page/8/">8</a></li>
							<li><a class="next page-number" href="https://happyliving.com.vn/cua-hang/page/2/"><i class="icon-angle-right"></i></a></li>
						</ul>
					</nav>
				</div> -->
			</div>
			<!-- shop container -->
		</div>
	</div>
</main>
<?php get_footer(); ?>