<?php /*Template Name: Giao diện tin tức*/ ?>
<?php get_header(); ?>
<?php
// $category = get_queried_object();
// $total = $category->category_count;
// $category_id = $category->term_id;
// $category_name = $category->name;
// $description = $category->category_description ? $category->category_description : $category_name;
?>
<!-- <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-list">
			<a class="breadcrumb-link" href="/">Trang chủ</a>
			<h1><a class="breadcrumb-link" href="javascript:;"><?php echo $category_name; ?></a></h1>
		</div>
	</div>
</div>
<div class="news ss-pd-second">
	<section class="news-main">
		<div class="container"> -->
<!-- <h2 class="t-title t-up mb-48" data-aos="fade-down"></h2> -->
<!-- <div class="dnor prose">
					<?php if (have_posts()) :
                  while (have_posts()) : the_post();
               ?>
						<div class="dnor-item prose-item prose-item-3" data-aos="fade-up" data-aos-delay="200">
							<div class="prose-wrap">
								<a href="<?php the_permalink(); ?>" class="prose-img">
									<img width="667" height="420" src="<?php echo get_BFI_thumbnail_url(get_post_thumbnail_id(), 400, 300); ?>" class="attachment-full size-full wp-post-image" alt="" />
								</a>
								<div class="prose-content">
									<div class="prose-line">
										<div class="prose-time">
											<p class="number"> <?php echo get_the_date('d', get_the_id()); ?> </p>
											<p class="text"> <?php echo get_the_date('F', get_the_id()); ?> </p>
										</div>
									</div>
									<div class="prose-content-wrap">
										<h3 class="prose-name">
											<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
										</h3>
										<p class="prose-des"> <?php echo wp_trim_words(get_the_content(), 20); ?></p>
										<a href="<?php the_permalink(); ?>" class="button-show">
											<p class="text"> Xem thêm </p>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php

                  endwhile;
               else :
                  get_template_part('content', 'none');
               endif;
               ?>
				
			</div>
		</div>
	</section>
</div>
<hr> -->

<main id="main" class="">
   <div id="content" class="blog-wrapper blog-archive page-wrapper">
      <div class="row row-large row-divided " style="margin-top: 120px;">
         <div class="large-9 col">
            <div id="post-list">
               <div class="row large-columns-1 medium-columns- small-columns-1">
                  <!-- use for loop -->
                  <?php
                  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                  $args = array(
                     'post_type' => 'post',
                     'posts_per_page' => 10,
                     'paged' => $paged,
                  );
                  $tintuc_query = new WP_Query($args);
                  if ($tintuc_query->have_posts()) :
                     while ($tintuc_query->have_posts()) : $tintuc_query->the_post(); ?>

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
                           'total' => $tintuc_query->max_num_pages,
                           'mid_size' => 2,
                           'prev_text' => __('« Trước'),
                           'next_text' => __('Sau »'),
                        ));
                        ?>
                     </div>

                  <?php else : ?>
                     <p>Chưa có bài viết nào.</p>
                  <?php endif;
                  wp_reset_postdata(); ?>
               </div>
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