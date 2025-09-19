<?php get_header(); ?>
<main class="bg-white main-archive">
	<section class="menuHeader">
		<div class="container">
			<p> <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ </a> <i class="fa fa-caret-right" aria-hidden="true"></i>Kết quả tìm kiếm: '<?php echo $_GET['s']; ?>'</p>
		</div>
	</section>
	<section class="container content-introduce activity">
		<div class="slide row">
			<div class="col-12 col-xl-8">
				<div class="news news-search row">
					<?php if ( have_posts() ) :
							while ( have_posts() ) : the_post();
					?>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<a href="<?php the_permalink(); ?>">
							<div class="itemGallery">
								<figure class="hover-img">
									<img class="img-thumnail" src="<?php echo get_BFI_thumbnail_url(get_post_thumbnail_id(), 400, 280); ?>" alt="">
								</figure>
								<h4><?php the_title(); ?></h4>
								<p>
									<span><img class="icon-new" src="<?php echo get_template_directory_uri() . '/images/assets/calendar.png'; ?>" alt=""> <?php echo get_the_date('d-m-Y', get_the_id()); ?></span>
									<span><img class="icon-new" src="<?php echo get_template_directory_uri() . '/images/assets/view.png'; ?>" alt=""> <?php echo getPostViews(get_the_ID()); ?> lượt xem</span>
								</p>
							</div>
						</a>
					</div>
					<?php
					
					endwhile;
					else :
					get_template_part( 'content', 'none' );
					endif;
					?>
				</div>
				<div class="pagination">
				    <?php 
				        bootstrap_pagination();
				    ?>
				</div>
			</div>
			<div class="col-12 col-xl-4">
				<div class="news-care">
					<p>Tin nhiều người quan tâm</p>
					<ul>
						<?php
						// the query
						$args = array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'orderby'   => 'meta_value_num',
										'meta_key'  => 'post_views_count',
						);
						$the_query = new WP_Query( $args ); ?>
						<?php if ( $the_query->have_posts() ) : ?>
						<!-- pagination here -->
						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_BFI_thumbnail_url(get_post_thumbnail_id(), 400, 280); ?>" alt="">
								<span><?php the_title(); ?></span>
							</a>
						</li>
						<?php endwhile; ?>
						<!-- end of the loop -->
						<!-- pagination here -->
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="actionGallery pt-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>TIN HOẠT ĐỘNG</h3>
				</div>
			</div>
			<div class="row">
				<?php
				// the query
				$args = array(
				'post_type' => 'post',
				'posts_per_page'      => 3,
				);
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
				<!-- pagination here -->
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="<?php the_permalink(); ?>">
						<div class="itemGallery">
							<figure class="hover-img">
								<img class="img-thumnail" src="<?php echo get_BFI_thumbnail_url(get_post_thumbnail_id(), 400, 280); ?>" alt="">
							</figure>
							<h4><?php the_title(); ?></h4>
							<p class="date-time-new">
								<span><img class="icon-new" src="<?php echo get_template_directory_uri() . '/images/assets/calendar.png'; ?>" alt=""> <?php echo get_the_date('d-m-Y', get_the_id()); ?></span>
								<span><img class="icon-new" src="<?php echo get_template_directory_uri() . '/images/assets/view.png'; ?>" alt=""> <?php echo getPostViews(get_the_ID()); ?> lượt xem</span>
							</p>
						</div>
					</a>
				</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>