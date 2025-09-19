<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
   exit; // Exit if accessed directly
}

?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

<?php while (have_posts()) : ?>
   <?php the_post(); ?>

   <?php wc_get_template_part('content', 'single-product'); ?>

<?php endwhile; // end of the loop. 
?>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>

<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');
?>

<?php
// get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
<main id="main" class="">
   <div class="shop-container">
      <div class="container">
         <div class="woocommerce-notices-wrapper"></div>
      </div>
      <div id="product-1651" class="product type-product post-1651 status-publish first instock product_cat-phong-tam-kinh-blue-standard product_cat-phong-tam-kinh-cua-mo-180-do product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura product_tag-phong-tam-kinh has-post-thumbnail shipping-taxable purchasable product-type-simple">
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
                           <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
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
                                 global $product;

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
                                          <div class="screen-reader-response">
                                             <p role="status" aria-live="polite" aria-atomic="true"></p>
                                             <ul></ul>
                                          </div>
                                          <form action="/san-pham/phong-tam-kinh-blue-sanitary-qlf92/#wpcf7-f1187-p1651-o1" method="post" class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate" data-status="init">
                                             <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="1187" />
                                                <input type="hidden" name="_wpcf7_version" value="6.0.6" />
                                                <input type="hidden" name="_wpcf7_locale" value="vi" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1187-p1651-o1" />
                                                <input type="hidden" name="_wpcf7_container_post" value="1651" />
                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                <input type="hidden" name="_wpcf7dtx_version" value="5.0.3" />
                                             </div>
                                             <p><label> Khách hàng</label><br />
                                                <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Họ và tên khách hàng" value="" type="text" name="your-name" /></span>
                                             </p>
                                             <p><label> Email</label><br />
                                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Email liên hệ" value="" type="email" name="your-email" /></span>
                                             </p>
                                             <p><label> Số điện thoại</label><br />
                                                <span class="wpcf7-form-control-wrap" data-name="tel-622"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Số điện thoại liên hệ" value="" type="tel" name="tel-622" /></span>
                                             </p>
                                             <p><label> Lựa chọn nhu cầu Tư vấn - Báo giá về:</label><br />
                                                <span class="wpcf7-form-control-wrap" data-name="checkbox-566"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><input type="checkbox" name="checkbox-566[]" value="Combo nhà tắm" /><span class="wpcf7-list-item-label">Combo nhà tắm</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-566[]" value="Phòng tắm kính" /><span class="wpcf7-list-item-label">Phòng tắm kính</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-566[]" value="Vòi bếp" /><span class="wpcf7-list-item-label">Vòi bếp</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-566[]" value="Chậu rửa bát 1 hố" /><span class="wpcf7-list-item-label">Chậu rửa bát 1 hố</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-566[]" value="Sen vòi tắm" /><span class="wpcf7-list-item-label">Sen vòi tắm</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="checkbox-566[]" value="Vòi/chậu rửa" /><span class="wpcf7-list-item-label">Vòi/chậu rửa</span></label></span></span></span>
                                             </p>
                                             <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Gửi đi" /></p>
                                             <div class="wpcf7-response-output" aria-hidden="true"></div>
                                          </form>
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
                                 <div class="product-small col has-hover product type-product post-507 status-publish instock product_cat-chau-toyoura product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/chau-rua-bat-nhat-ban-toyoura-n801bia-eb/" aria-label="Chậu rửa bát Nhật Bản Toyoura - N801BIA-EB">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Chậu rửa bát Nhật Bản Toyoura - N801BIA-EB" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-100x100.jpg 100w, https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1.jpg 460w" sizes="auto, (max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2024/01/z5129191431717_be248ffdacc09970df62aa195d643f58-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2024/01/z5129191431717_be248ffdacc09970df62aa195d643f58-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2024/01/z5129191431717_be248ffdacc09970df62aa195d643f58-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2024/01/z5129191431717_be248ffdacc09970df62aa195d643f58-100x100.jpg 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/chau-rua-bat-nhat-ban-toyoura-n801bia-eb/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Chậu rửa bát Nhật Bản Toyoura &#8211; N801BIA-EB</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>13,805,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-small col has-hover product type-product post-135 status-publish instock product_cat-chau-toyoura product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/chau-rua-bat-nhat-ban-toyoura-n750bia-eb/" aria-label="Chậu rửa bát Nhật Bản Toyoura - N750BIA-EB">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Chậu rửa bát Nhật Bản Toyoura - N750BIA-EB" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1-100x100.jpg 100w, https://happyliving.com.vn/wp-content/uploads/2024/01/N801BIA-EB-2-460x460-1.jpg 460w" sizes="auto, (max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2024/01/406445496_310946521782557_7378801793489348289_n-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2024/01/406445496_310946521782557_7378801793489348289_n-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2024/01/406445496_310946521782557_7378801793489348289_n-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2024/01/406445496_310946521782557_7378801793489348289_n-100x100.jpg 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/chau-rua-bat-nhat-ban-toyoura-n750bia-eb/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Chậu rửa bát Nhật Bản Toyoura &#8211; N750BIA-EB</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>12,671,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-small col has-hover product type-product post-1537 status-publish last instock product_cat-phong-tam-kinh product_cat-bo-suu-tap-blue-masterise product_cat-phong-tam-kinh-cua-mo-180-do-phong-tam-kinh product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura product_tag-phong-tam-kinh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-bub12b/" aria-label="Phòng Tắm Kính Blue Sanitary - BUC12B">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/03/BUC12BX-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Phòng Tắm Kính Blue Sanitary - BUC12B" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/03/BUC12BX-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2025/03/BUC12BX-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2025/03/BUC12BX-100x100.jpg 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/03/1-3-300x300.png" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/03/1-3-300x300.png 300w, https://happyliving.com.vn/wp-content/uploads/2025/03/1-3-150x150.png 150w, https://happyliving.com.vn/wp-content/uploads/2025/03/1-3-100x100.png 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-bub12b/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Phòng Tắm Kính Blue Sanitary &#8211; BUC12B</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>25,600,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-small col has-hover product type-product post-1640 status-publish first instock product_cat-phong-tam-kinh-blue-standard product_cat-phong-tam-kinh-cua-truot product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura product_tag-phong-tam-kinh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-zyp14/" aria-label="Phòng Tắm Kính Blue Sanitary - ZYP14">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/04/ZYP14G-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Blue Sanitary" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/04/ZYP14G-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2025/04/ZYP14G-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2025/04/ZYP14G-100x100.jpg 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-300x300.png" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-300x300.png 300w, https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-1024x1024.png 1024w, https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-150x150.png 150w, https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-768x768.png 768w, https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-1536x1536.png 1536w, https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-2048x2048.png 2048w, https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-600x600.png 600w, https://happyliving.com.vn/wp-content/uploads/2025/04/profile-1-100x100.png 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-zyp14/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Phòng Tắm Kính Blue Sanitary &#8211; ZYP14</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>9,300,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-small col has-hover product type-product post-1631 status-publish instock product_cat-phong-tam-kinh product_cat-bo-suu-tap-blue-masterise product_cat-phong-tam-kinh-cua-mo-180-do-phong-tam-kinh product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura product_tag-phong-tam-kinh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-axb16x/" aria-label="Phòng Tắm Kính Blue Sanitary - AXB16X">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/04/AXB16X-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Phòng Tắm Kính Blue Sanitary - AXB16X" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/04/AXB16X-1-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2025/04/AXB16X-1-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2025/04/AXB16X-1-100x100.jpg 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-300x300.png" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-300x300.png 300w, https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-1024x1024.png 1024w, https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-150x150.png 150w, https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-768x768.png 768w, https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-1536x1536.png 1536w, https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-2048x2048.png 2048w, https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-600x600.png 600w, https://happyliving.com.vn/wp-content/uploads/2025/04/Bottom-waterproof-strip-100x100.png 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-axb16x/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Phòng Tắm Kính Blue Sanitary &#8211; AXB16X</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>21,800,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-small col has-hover product type-product post-518 status-publish instock product_cat-chau-toyoura product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/chau-rua-bat-nhat-ban-toyoura-n760zwdl-eb/" aria-label="Chậu rửa bát Nhật Bản Toyoura - N760ZWDL-EB ( Tặng kèm phụ kiện chậu trị giá 3.000.000đ )">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2024/01/JAPAN-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Chậu rửa bát Nhật Bản Toyoura - N760ZWDL-EB ( Tặng kèm phụ kiện chậu trị giá 3.000.000đ )" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2024/01/JAPAN-300x300.png 300w, https://happyliving.com.vn/wp-content/uploads/2024/01/JAPAN-150x150.png 150w, https://happyliving.com.vn/wp-content/uploads/2024/01/JAPAN-768x768.png 768w, https://happyliving.com.vn/wp-content/uploads/2024/01/JAPAN-600x600.png 600w, https://happyliving.com.vn/wp-content/uploads/2024/01/JAPAN-100x100.png 100w, https://happyliving.com.vn/wp-content/uploads/2024/01/JAPAN.png 1000w" sizes="auto, (max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2024/01/IMG_7417-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2024/01/IMG_7417-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2024/01/IMG_7417-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2024/01/IMG_7417-100x100.jpg 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/chau-rua-bat-nhat-ban-toyoura-n760zwdl-eb/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Chậu rửa bát Nhật Bản Toyoura &#8211; N760ZWDL-EB ( Tặng kèm phụ kiện chậu trị giá 3.000.000đ )</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>25,872,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-small col has-hover product type-product post-1870 status-publish last instock product_cat-phong-tam-kinh product_cat-bo-suu-tap-blue-masterise product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura product_tag-phong-tam-kinh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-2-buong-blue-sanitary-buza3b/" aria-label="Phòng Tắm Kính 2 Buồng Blue Sanitary - BUZA3B">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/07/BUZA3B-1-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Phòng tắm kính Blue Sanitary" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/07/BUZA3B-1-300x300.png 300w, https://happyliving.com.vn/wp-content/uploads/2025/07/BUZA3B-1-150x150.png 150w, https://happyliving.com.vn/wp-content/uploads/2025/07/BUZA3B-1-100x100.png 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-2-buong-blue-sanitary-buza3b/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Phòng Tắm Kính 2 Buồng Blue Sanitary &#8211; BUZA3B</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>14,200,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-small col has-hover product type-product post-1456 status-publish first instock product_cat-phong-tam-kinh product_cat-bo-suu-tap-blue-masterise product_cat-phong-tam-kinh-cua-mo-180-do-phong-tam-kinh product_tag-chau-rua-bat product_tag-chau-rua-bat-1-ho product_tag-chau-rua-bat-nhat product_tag-chau-rua-bat-toyoura product_tag-phong-tam-kinh product_tag-vach-tam-kinh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1">
                                       </div>
                                       <div class="product-small box ">
                                          <div class="box-image">
                                             <div class="image-fade_in_back">
                                                <a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-buc90mx/" aria-label="Phòng Tắm Kính Blue Sanitary - BUC90MX">
                                                   <img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/03/BUC90MB-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Phòng Tắm Kính Blue Sanitary - BUC90MX" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/03/BUC90MB-300x300.jpg 300w, https://happyliving.com.vn/wp-content/uploads/2025/03/BUC90MB-150x150.jpg 150w, https://happyliving.com.vn/wp-content/uploads/2025/03/BUC90MB-100x100.jpg 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-300x300.png" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-300x300.png 300w, https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-1024x1024.png 1024w, https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-150x150.png 150w, https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-768x768.png 768w, https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-1536x1536.png 1536w, https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-2048x2048.png 2048w, https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-600x600.png 600w, https://happyliving.com.vn/wp-content/uploads/2025/03/outside-hinge-100x100.png 100w" sizes="auto, (max-width: 300px) 100vw, 300px" /> </a>
                                             </div>
                                             <div class="image-tools is-small top right show-on-hover">
                                             </div>
                                             <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text box-text-products">
                                             <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a href="https://happyliving.com.vn/san-pham/phong-tam-kinh-blue-sanitary-buc90mx/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Phòng Tắm Kính Blue Sanitary &#8211; BUC90MX</a></p>
                                             </div>
                                             <div class="price-wrapper">
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>23,300,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
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