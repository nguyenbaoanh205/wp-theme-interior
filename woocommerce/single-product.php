<?php
if (! defined('ABSPATH')) {
   exit; // Exit if accessed directly
}
get_header();
?>
<main id="main" class="">
   <div class="shop-container">
      <div class="container">
         <div class="woocommerce-notices-wrapper"></div>
      </div>
      <div style="margin-top: 118px;" id="product-1651" class="product type-product post-1651 status-publish first instock product_cat-phong-tam-kinh-blue-standard product_cat-phong-tam-kinh-cua-mo-180-do product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura product_tag-phong-tam-kinh has-post-thumbnail shipping-taxable purchasable product-type-simple">
         <div class="custom-product-page ux-layout-139 ux-layout-scope-global">
            <section class="section" id="section_1443340718">
               <div class="bg section-bg fill bg-fill  bg-loaded">
               </div>
               <div class="section-content relative">
                  <div id="gap-2027823443" class="gap-element clearfix" style="display:block; height:auto;">
                     <style>
                        #gap-2027823443 {
                           padding-top: 30px;
                        }
                     </style>
                  </div>
                  <div class="row align-equal" id="row-700612876">
                     <div id="col-1016190975" class="col small-12 large-12">
                        <div class="col-inner">
                           <div class="product-breadcrumb-container is-small">
                              <nav class="woocommerce-breadcrumb breadcrumbs "><?php woocommerce_breadcrumb(); ?></nav>
                           </div>
                        </div>
                     </div>
                     <div id="col-724702230" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                           <div style="width: 100%;" class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                              <div class="badge-container is-larger absolute left top z-1">
                              </div>
                              <div class="image-tools absolute top show-on-hover right z-3">
                              </div>
                              <div class="woocommerce-product-gallery__wrapper product-gallery-stacked product-gallery-slider slider slider-nav-small mb-half"
                                 data-flickity-options='{
                                 "cellAlign": "center",
                                 "wrapAround": true,
                                 "autoPlay": false,
                                 "prevNextButtons": false,
                                 "adaptiveHeight": true,
                                 "imagesLoaded": true,
                                 "lazyLoad": 1,
                                 "dragThreshold" : 15,
                                 "pageDots": false,
                                 "rightToLeft": false       }'>
                                 <?php
                                 $product = wc_get_product(get_the_ID());
                                 if (! $product) return;

                                 // Ảnh chính
                                 $main_image_id = $product->get_image_id(); // ID ảnh đại diện
                                 $main_image_url = wp_get_attachment_image_url($main_image_id, '600x413'); // kích thước bạn muốn
                                 $main_image_thumb = wp_get_attachment_image_url($main_image_id, '100x100'); // thumbnail

                                 echo '<div data-thumb="' . esc_url($main_image_thumb) . '" data-thumb-alt="' . esc_attr($product->get_name()) . '" class="woocommerce-product-gallery__image slide first">';
                                 echo '<a href="' . esc_url(wp_get_attachment_url($main_image_id)) . '">';
                                 echo '<img width="600" height="413" src="' . esc_url($main_image_url) . '" class="wp-post-image skip-lazy" alt="' . esc_attr($product->get_name()) . '" decoding="async" fetchpriority="high" />';
                                 echo '</a></div>';

                                 // Các ảnh gallery khác
                                 $gallery_ids = $product->get_gallery_image_ids(); // array các ID ảnh gallery
                                 foreach ($gallery_ids as $id) {
                                    $thumb_url = wp_get_attachment_image_url($id, '100x100');
                                    $image_url = wp_get_attachment_image_url($id, '600x600');
                                    echo '<div data-thumb="' . esc_url($thumb_url) . '" data-thumb-alt="" class="woocommerce-product-gallery__image slide">';
                                    echo '<a href="' . esc_url(wp_get_attachment_url($id)) . '">';
                                    echo '<img width="600" height="600" src="' . esc_url($image_url) . '" class="skip-lazy" alt="" decoding="async" />';
                                    echo '</a></div>';
                                 }
                                 ?>
                              </div>
                           </div>
                           <div class="show-for-medium product-gallery-stacked-thumbnails">
                              <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                                 data-flickity-options='{
                                 "cellAlign": "left",
                                 "wrapAround": false,
                                 "autoPlay": false,
                                 "prevNextButtons": true,
                                 "asNavFor": ".product-gallery-slider",
                                 "percentPosition": true,
                                 "imagesLoaded": true,
                                 "pageDots": false,
                                 "rightToLeft": false,
                                 "contain": true
                                 }'>
                                 <div class="col is-nav-selected first">
                                    <a>
                                       <img src="https://happyliving.com.vn/wp-content/uploads/2025/04/QLF92B-300x300.jpg" alt="BLue Sanitary" width="300" height="300" class="attachment-woocommerce_thumbnail" /> </a>
                                 </div>
                                 <div class="col"><a><img src="https://happyliving.com.vn/wp-content/uploads/2025/04/bottom-structure-300x300.png" alt="" width="300" height="300" class="attachment-woocommerce_thumbnail" /></a></div>
                                 <div class="col"><a><img src="https://happyliving.com.vn/wp-content/uploads/2025/04/handle-2-300x300.png" alt="" width="300" height="300" class="attachment-woocommerce_thumbnail" /></a></div>
                                 <div class="col"><a><img src="https://happyliving.com.vn/wp-content/uploads/2025/04/pivot-of-profile-300x300.png" alt="" width="300" height="300" class="attachment-woocommerce_thumbnail" /></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="col-1228072171" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                           <div class="row row-collapse align-center rowsticky" id="row-1210458563">
                              <div id="col-1596142200" class="col small-12 large-12">
                                 <div class="col-inner">
                                    <div class="product-title-container is-xsmall">
                                       <h1 class="product-title product_title entry-title">
                                          <?php echo $product->get_name(); ?>
                                       </h1>
                                    </div>
                                    <div class="product-price-container is-normal">
                                       <div class="price-wrapper">
                                          <p class="price product-page-price ">
                                             <span class="woocommerce-Price-amount amount"><bdi><?php echo wc_price($product->get_price()); ?></bdi></span>
                                          </p>
                                       </div>
                                    </div>
                                    <a href="#tuvan" class="button primary">
                                       <span>Tư vấn & Đặt hàng</span>
                                    </a>
                                    <div id="tuvan"
                                       class="lightbox-by-id lightbox-content mfp-hide lightbox-white "
                                       style="max-width:700px ;padding:20px">
                                       <p style="text-align: left;">Để được tư vấn - báo giá chi tiết, Quý khách vui lòng cung cấp các thông tin vào form bên dưới. Chuyên viên tư vấn của HLC sẽ trực tiếp liên hệ hỗ trợ Quý khách.</p>
                                       <p>Chúng tôi cam kết bảo mật mọi thông tin liên quan.</p>
                                       <div class="wpcf7 no-js" id="wpcf7-f1187-p1651-o1" lang="vi" dir="ltr" data-wpcf7-id="1187">
                                          <?php echo do_shortcode('[contact-form-7 id="f650cf7" title="Form Tư vấn & Đặt hàng"]') ?>
                                       </div>
                                    </div>
                                    <div class="product-page-sections">
                                       <div class="product-section">
                                          <div class="row">
                                             <div class="large-2 col pb-0 mb-0">
                                                <h5 class="uppercase mt">Mô tả</h5>
                                             </div>
                                             <div class="large-10 col pb-0 mb-0">
                                                <div class="panel entry-content">
                                                   <?php echo $product->get_description(); ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- <div class="product-section">
                                          <div class="row">
                                             <div class="large-2 col pb-0 mb-0">
                                                <h5 class="uppercase mt">Thông tin bổ sung</h5>
                                             </div>
                                             <div class="large-10 col pb-0 mb-0">
                                                <div class="panel entry-content">
                                                   <table class="woocommerce-product-attributes shop_attributes" aria-label="Chi tiết sản phẩm">
                                                      <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_m%c3%a0u-%c4%91en">
                                                         <th class="woocommerce-product-attributes-item__label" scope="row">Màu đen</th>
                                                         <td class="woocommerce-product-attributes-item__value">
                                                            <p>14,200, 000 Đ</p>
                                                         </td>
                                                      </tr>
                                                      <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_m%c3%a0u-chrome">
                                                         <th class="woocommerce-product-attributes-item__label" scope="row">Màu Chrome</th>
                                                         <td class="woocommerce-product-attributes-item__value">
                                                            <p>14,600,000 Đ</p>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </div>
                                             </div>
                                          </div>
                                       </div> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="col-1609144770" class="col small-12 large-12">
                        <div class="col-inner">
                           <div class="related related-products-wrapper product-section">
                              <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                 Sản phẩm tương tự
                              </h3>
                              <div class="row has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>

                                 <?php
                                 // Lấy ID sản phẩm hiện tại
                                 $product_id = get_the_ID();
                                 // Lấy sản phẩm tương tự
                                 $related_ids = wc_get_related_products($product_id, 8); // Lấy 8 sản phẩm tương tự

                                 foreach ($related_ids as $related_id) {
                                    $related_product = wc_get_product($related_id);
                                    if ($related_product) {
                                       // Lấy thông tin sản phẩm
                                       $related_product_link = get_permalink($related_id);
                                       $related_product_image = wp_get_attachment_image_url($related_product->get_image_id(), '300x300');
                                       $related_product_price = $related_product->get_price_html();
                                       $related_product_name = $related_product->get_name();
                                 ?>
                                       <div class="product-small col has-hover product type-product post-<?php echo $related_id; ?> status-publish instock">
                                          <div class="col-inner">
                                             <div class="badge-container absolute left top z-1"></div>
                                             <div class="product-small box">
                                                <div class="box-image">
                                                   <div class="image-fade_in_back">
                                                      <a href="<?php echo esc_url($related_product_link); ?>" aria-label="<?php echo esc_attr($related_product_name); ?>">
                                                         <img width="300" height="300" src="<?php echo esc_url($related_product_image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?php echo esc_attr($related_product_name); ?>" decoding="async" loading="lazy" />
                                                      </a>
                                                   </div>
                                                </div>
                                                <div class="box-text box-text-products">
                                                   <div class="title-wrapper">
                                                      <p class="name product-title woocommerce-loop-product__title">
                                                         <a href="<?php echo esc_url($related_product_link); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php echo esc_html($related_product_name); ?></a>
                                                      </p>
                                                   </div>
                                                   <div class="price-wrapper">
                                                      <span class="price"><?php echo $related_product_price; ?></span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                 <?php
                                    }
                                 }
                                 ?>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <style>
                  #section_1443340718 {
                     padding-top: 0px;
                     padding-bottom: 0px;
                     background-color: rgb(249, 242, 237);
                  }
               </style>
            </section>
            <div id="product-sidebar" class="mfp-hide">
               <div class="sidebar-inner">
                  <div class="hide-for-off-canvas" style="width:100%">
                     <ul class="next-prev-thumbs is-small nav-right text-right">
                        <li class="prod-dropdown has-dropdown">
                           <a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-qlc92/" rel="next" class="button icon is-outline circle">
                              <i class="icon-angle-right"></i> </a>
                           <div class="nav-dropdown">
                              <a title="Phòng Tắm Kính Blue Sanitary &#8211; QLC92" href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-qlc92/">
                                 <img width="100" height="100" src="https://happyliving.com.vn/wp-content/uploads/2025/04/QLC92B-Animation-manual-1-100x100.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/04/QLC92B-Animation-manual-1-100x100.jpg 100w, https://happyliving.com.vn/wp-content/uploads/2025/04/QLC92B-Animation-manual-1-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2025/04/QLC92B-Animation-manual-1-300x300.jpg 300w" sizes="auto, (max-width: 100px) 100vw, 100px" /></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <aside id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories">
                     <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                     <div class="is-divider small"></div>
                     <ul class="product-categories">
                        <li class="cat-item cat-item-79 cat-parent current-cat-parent">
                           <a href="https://happyliving.com.vn/danh-muc-san-pham/phong-tam-kinh/">Phòng tắm kính</a>
                           <ul class='children'>
                              <li class="cat-item cat-item-82 cat-parent">
                                 <a href="https://happyliving.com.vn/danh-muc-san-pham/phong-tam-kinh/bo-suu-tap-blue-masterise/">Bộ sưu tập Blue Masterise</a>
                                 <ul class='children'>
                                    <li class="cat-item cat-item-85"><a href="https://happyliving.com.vn/danh-muc-san-pham/phong-tam-kinh/bo-suu-tap-blue-masterise/phong-tam-kinh-cua-mo-180-do-phong-tam-kinh/">Phòng tắm kính cửa mở 180 độ</a></li>
                                 </ul>
                              </li>
                              <li class="cat-item cat-item-86 cat-parent current-cat-parent">
                                 <a href="https://happyliving.com.vn/danh-muc-san-pham/phong-tam-kinh/phong-tam-kinh-blue-standard/">Phòng tắm kính Blue Standard</a>
                                 <ul class='children'>
                                    <li class="cat-item cat-item-88"><a href="https://happyliving.com.vn/danh-muc-san-pham/phong-tam-kinh/phong-tam-kinh-blue-standard/phong-tam-kinh-cua-mo-135-do/">Phòng tắm kính cửa mở 135 độ</a></li>
                                    <li class="cat-item cat-item-87 current-cat"><a href="https://happyliving.com.vn/danh-muc-san-pham/phong-tam-kinh/phong-tam-kinh-blue-standard/phong-tam-kinh-cua-mo-180-do/">Phòng tắm kính cửa mở 180 độ</a></li>
                                    <li class="cat-item cat-item-93"><a href="https://happyliving.com.vn/danh-muc-san-pham/phong-tam-kinh/phong-tam-kinh-blue-standard/phong-tam-kinh-cua-truot/">Phòng tắm kính cửa trượt</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="cat-item cat-item-25"><a href="https://happyliving.com.vn/danh-muc-san-pham/sen-voi-tam-sanei-nhat-ban/">Sen vòi tắm</a></li>
                        <li class="cat-item cat-item-34"><a href="https://happyliving.com.vn/danh-muc-san-pham/voi-rua-tay/">Vòi rửa tay</a></li>
                        <li class="cat-item cat-item-50"><a href="https://happyliving.com.vn/danh-muc-san-pham/chau-gom-rua-tay/">Chậu Gốm Rửa Tay</a></li>
                        <li class="cat-item cat-item-21"><a href="https://happyliving.com.vn/danh-muc-san-pham/voi-rua-bat-sanei-nhat-ban/">Vòi rửa bát Sanei</a></li>
                        <li class="cat-item cat-item-22"><a href="https://happyliving.com.vn/danh-muc-san-pham/chau-toyoura/">Chậu rửa bát 1 hố</a></li>
                        <li class="cat-item cat-item-15"><a href="https://happyliving.com.vn/danh-muc-san-pham/chua-phan-loai/">Chưa phân loại</a></li>
                     </ul>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- shop container -->
</main>
<?php get_footer() ?>;