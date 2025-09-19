<?php 
// Template Name: Page Full Width
get_header(); ?>

	<div class="container">

		<?php include_once get_template_directory() . '/inc/structure/breadcrumbs.php'; ?>

		<div id="content" class="site-content">
			<div class="inner-content box-item">
				<?php while ( have_posts() ) : the_post(); ?>
						
					<h1 class="page-title title"><?php the_title(); ?></h1>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				<?php endwhile; ?>
			</div><!-- .inner-content -->
		</div><!-- .site-content -->

	</div><!-- .container -->

<?php get_footer(); ?>
