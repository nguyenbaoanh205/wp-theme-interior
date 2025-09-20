<?php get_header(); ?>

<main id="main" class="">
	<div id="content" class="blog-wrapper blog-archive page-wrapper">

		<div class="row row-large row-divided " style="margin-top: 120px;">
			<header class="archive-page-header" style="width: 100%;">
				<div class="row">
					<div class="large-12 text-center col">
						<h1 class="page-title is-large uppercase">
							Kết quả tìm kiếm cho: <span><?php echo get_search_query(); ?></span> </h1>
					</div>
				</div>
			</header>
			<!-- Danh sách bài viết -->
			<div class="large-9 col">
				<div id="post-list">
					<div class="row large-columns-1 medium-columns- small-columns-1">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="col post-item">
									<div class="col-inner">
										<div class="box box-vertical box-text-bottom box-blog-post has-hover">

											<!-- Ảnh đại diện -->
											<div class="box-image" style="width:40%;">
												<div class="image-cover" style="padding-top:56%;">
													<a href="<?php the_permalink(); ?>" class="plain" aria-label="<?php the_title(); ?>">
														<?php
														if (has_post_thumbnail()) {
															the_post_thumbnail('medium', array(
																'class' => 'attachment-medium size-medium wp-post-image',
																'alt' => get_the_title(),
																'loading' => 'lazy'
															));
														}
														?>
													</a>
												</div>
											</div>

											<!-- Nội dung bài viết -->
											<div class="box-text text-left">
												<div class="box-text-inner blog-post-inner">
													<h5 class="post-title is-large">
														<a href="<?php the_permalink(); ?>" class="plain"><?php the_title(); ?></a>
													</h5>
													<div class="is-divider"></div>
													<p class="from_the_blog_excerpt">
														<?php echo wp_trim_words(get_the_excerpt(), 20, ' [...]'); ?>
													</p>
												</div>
											</div>

											<!-- Ngày đăng -->
											<div class="badge absolute top post-date badge-circle-inside">
												<div class="badge-inner">
													<span class="post-date-day"><?php echo get_the_date('d'); ?></span><br>
													<span class="post-date-month is-xsmall"><?php echo get_the_date('M'); ?></span>
												</div>
											</div>

										</div>
									</div>
								</div>
							<?php endwhile; ?>

							<!-- Phân trang -->
							<div class="pagination">
								<?php
								echo paginate_links(array(
									'total' => $wp_query->max_num_pages,
									'mid_size' => 2,
									'prev_text' => __('« Trước'),
									'next_text' => __('Sau »'),
								));
								?>
							</div>

						<?php else : ?>
							<p>Không tìm thấy kết quả nào cho từ khóa: <strong><?php echo get_search_query(); ?></strong></p>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="post-sidebar large-3 col">
				<?php if (is_active_sidebar('primary-sidebar')): ?>
					<?php dynamic_sidebar('primary-sidebar'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>