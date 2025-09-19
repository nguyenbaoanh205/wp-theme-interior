<?php get_header(); ?>
<!-- <?php setPostViews(get_the_ID()); ?>

<?php while (have_posts()) : the_post(); ?>
	<?php the_title(); ?>
	<hr>
	<?php the_content(); ?>
<?php endwhile; ?> -->

<main id="main" class="">
	<div id="content" class="blog-wrapper blog-single page-wrapper">
		<div class="row row-large row-divided " style="margin-top: 120px;">
			<div class="large-9 col">
				<article id="post-1808" class="post-1808 post type-post status-publish format-standard has-post-thumbnail hentry category-khong-phan-loai">
					<div class="article-inner ">
						<?php if (have_posts()) : the_post(); ?>
							<header class="entry-header">
								<div class="entry-header-text entry-header-text-top text-left">
									<h6 class="entry-category is-xsmall"><a href="<?php the_permalink(); ?>" rel="category tag"><?php the_category(', '); ?></a></h6>
									<h1 class="entry-title"><?php the_title(); ?></h1>
									<div class="entry-divider is-divider small"></div>
									<div class="entry-meta uppercase is-xsmall">
										<span class="posted-on">Đã đăng trên <a href="<?php the_permalink(); ?>" rel="bookmark"><time class="entry-date published" datetime="2025-07-16T06:49:48+00:00"><?php echo get_the_date() ?></time><time class="updated" datetime="2025-07-16T06:51:11+00:00"><?php echo get_the_date() ?></time></a></span> <span class="byline">bởi <span class="meta-author vcard"><a class="url fn n" href="https://happyliving.com.vn/author/dohien/"><?php the_author(); ?></a></span></span>
									</div>
								</div>
								<div class="entry-image relative">
									<a href="<?php the_permalink(); ?>">
										<?php if (has_post_thumbnail()) : ?>
											<div class="single-post-thumbnail">
												<?php
												the_post_thumbnail('full', array(
													'class' => 'attachment-large size-large wp-post-image',
													'alt' => get_the_title(),
													'decoding' => 'async',
													'fetchpriority' => 'high',
												));
												?>
											</div>
										<?php endif; ?>
										<div class="badge absolute top post-date badge-circle-inside">
											<div class="badge-inner">
												<span class="post-date-day">16</span><br>
												<span class="post-date-month is-small">Th7</span>
											</div>
										</div>
								</div>
							</header>
							<div class="entry-content single-page">
								<?php the_content(); ?>
							</div>
						<?php endif; ?>
					</div>
				</article>
				<div id="comments" class="comments-area">
				</div>
			</div>
			<div class="post-sidebar large-3 col">
				<?php if (is_active_sidebar('primary-sidebar')): ?>
					<?php dynamic_sidebar('primary-sidebar'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>