<?php get_header(); ?>

<!-- <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-list">
			<?php include_once get_template_directory() . '/inc/structure/breadcrumbs.php'; ?>
		</div>
	</div>
</div> -->
<?php if (is_archive()) : ?>
	<?php include_once get_template_directory() . '/woocommerce/archive-product.php'; ?>
<?php endif; ?>
<?php if (is_single()) : ?>
	<?php include_once get_template_directory() . '/woocommerce/single-product.php'; ?>
<?php endif ?>

<?php //woocommerce_content(); ?>

<?php get_footer(); ?>