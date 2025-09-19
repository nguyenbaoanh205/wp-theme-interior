<?php get_header(); ?>
<?php /*Template Name: Giao diện liên hệ */ ?>
<div class="breadcrumb">
   <div class="container">
      <div class="breadcrumb-list">
         <a class="breadcrumb-link" href="/">Trang chủ</a>
         <h1><a class="breadcrumb-link" href="javascript:;">Liên hệ</a></h1>
      </div>
   </div>
</div>
<div class="news">
   <div class="container">
      <div class="maps">
         <?php echo get_field('acf_page_contact_title_gg_copy'); ?>
      </div>
      <div class="info" id="contact">
         <div class="row">
            <div class="col-6">
            <h4 class="titleContact"><?php echo get_field('acf_page_contact_title'); ?></h4>
                  <?php $datas = get_field('acf_page_contact_title_copy'); ?>
                  <?php if ($datas) : ?>
                     <?php foreach ($datas as $key => $value) : ?>
                        <p class="contactInformation">
                           <i class="<?php echo $value['icon'] ?>" aria-hidden="true"></i>
                           <span>
                              <?php echo $value['title']; ?>
                           </span>
                        </p>
                     <?php endforeach ?>
                  <?php endif ?>
            </div>
            <div class="col-6">
            <?php echo do_shortcode('[contact-form-7 id="145" title="Liên hệ"]') ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>