<?php /*Template Name: Giao diện dự án*/ ?>
<?php get_header(); ?>

<?php
// Lấy taxonomy "loai-du-an" thay vì "category"
$terms = get_terms(array(
    'taxonomy'   => 'category',
    'hide_empty' => true, // luôn hiện tất cả kể cả khi chưa có bài
));
?>

<main id="main" class="">

    <div class="portfolio-page-wrapper portfolio-archive page-featured-item">
        <div class="page-title normal-title">
            <div class="page-title-inner container flex-row medium-flex-wrap medium-text-center">
                <div class="flex-col flex-grow">
                    <h1 class="entry-title is-larger uppercase pb-0 pt-0 mb-0">
                        Dự án 
                    </h1>
                </div>
                <div class="flex-col flex-right">
                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>">Trang chủ</a>
                        <span class='divider'>/</span>Dự án
                    </div>
                </div>
            </div>
        </div>

        <div id="content" role="main" class="page-wrapper">
            <div id="portfolio-17456402" class="portfolio-element-wrapper has-filtering">
                <div class="container mb-half">
                    <ul class="nav nav-center nav-line-bottom nav-uppercase filter-nav">
                        <li class="active"><a href="#" data-filter="*">Tất cả</a></li>
                        <?php if (!empty($terms)) : ?>
                            <?php foreach ($terms as $term): ?>
                                <li>
                                    <a href="#" data-filter=".<?php echo esc_attr($term->slug); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="row row-isotope large-columns-3 medium-columns-3 small-columns-2 row-small">
                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while ($query->have_posts()): $query->the_post();
                            $post_terms = get_the_terms(get_the_ID(), 'category');
                            $classes = $post_terms ? implode(' ', wp_list_pluck($post_terms, 'slug')) : '';
                    ?>
                        <div class="col <?php echo esc_attr($classes); ?>">
                            <div class="col-inner">
                                <a href="<?php the_permalink(); ?>" class="plain">
                                    <div class="portfolio-box box has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:100%;">
                                                <?php the_post_thumbnail('large'); ?>
                                            </div>
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="box-text-inner">
                                                <h6 class="uppercase portfolio-box-title">
                                                    <?php the_title(); ?>
                                                </h6>
                                                <!-- <?php if ($post_terms): ?>
                                                    <p class="uppercase portfolio-box-category is-xsmall op-6">
                                                        <?php echo esc_html($post_terms[0]->name); ?>
                                                    </p>
                                                <?php endif; ?> -->
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
