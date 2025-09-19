<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-list">
			<a class="breadcrumb-link" href="/">Trang chủ</a>
			<a class="breadcrumb-link" href="javascript:;"><?php the_title(); ?></a>
		</div>
	</div>
</div>
<section class="news-detail-main">
	<div class="container">
		<div class="sidess ss-pd-second border-bottom-posi">
			<div class="dnor-item">
				<div class="mb-48">
					<h1 class="t-title t-up mb-24s" data-aos="fade-down">
						<?php the_title(); ?>
					</h1>
				</div>
				<div class="post-content mona-content">
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>