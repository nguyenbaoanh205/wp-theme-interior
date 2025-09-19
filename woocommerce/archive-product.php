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

                <?php if (woocommerce_product_loop()) : ?>
                    <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2 has-equal-box-heights equalize-box">
                        <?php while (have_posts()) : the_post();
                            global $product; ?>
                            <div class="product-small col has-hover product type-product post-<?php the_ID(); ?> status-publish instock <?php echo implode(' ', wp_get_post_terms(get_the_ID(), 'product_cat', array('fields' => 'slugs'))); ?> has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <div class="col-inner">
                                    <div class="badge-container absolute left top z-1">
                                        <?php if ($product->is_on_sale()) echo '<span class="onsale">Sale!</span>'; ?>
                                    </div>
                                    <div class="product-small box ">
                                        <div class="box-image">
                                            <div class="image-fade_in_back">
                                                <a href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">
                                                    <?php echo woocommerce_get_product_thumbnail(); ?>
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
                                                <span class="price"><?php echo $product->get_price_html(); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination-wrapper">
                        <?php woocommerce_pagination(); ?>
                    </div>

                <?php else : ?>
                    <p>Không có sản phẩm nào.</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>