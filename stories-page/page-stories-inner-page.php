<?php
/*
Template Name: Sustainability Stories,Inner, Page
*/
?>


<?php
 get_header(null, array('css_files' => array(
    // \assets\css\
    'sustainability-css/stories-inner-page-styles',
    'pages/swiper-bundle.min'
  ))); 

  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

?>


<div class="stories-inner-page-pic-container">
    <img class="stories-section__image-img " src="/wp-content/themes/main/assets/img/sustainability/inner-page-banner.png">
</div>



<?php get_footer(null, array('js_files' => array(
  // \assets\css\
  'common/swiper-bundle.min.js',
  'common/sustain-main'
  ))); ?>