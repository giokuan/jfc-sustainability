<?php
/*
Template Name: Sustainability Stories, Innerpage
*/
?>


<?php
 get_header(null, array('css_files' => array(
    // \assets\css\
    'sustainability-css/stories-inner-styles',
    'pages/swiper-bundle.min'
  ))); 

//   $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

?>

<div class="back">
    <a class="back-to-stories" href="javascript:history.go(-1)"><img src="/wp-content/themes/main/assets/img/sustainability/lt.png" class="lt" >Back to Stories</a>
</div>

<div class="innerpage-container">
    <img class="stories-section__image-img" src="/wp-content/themes/main/assets/img/sustainability/inner-page-banner.png">
    <img class="stories-section__image-img-mobile" src="/wp-content/themes/main/assets/img/sustainability/inner-page-banner-mobile.png">
</div>

<div class="title">
    <p>
        Uplifting the lives of over 500 farmers, and counting!
    </p>
</div>

<div class="link-container">
    <div class="date-container">
        <p class="date">July 29, 2022</p>
        <p>|</p>
        <p class="people">People</p>
    </div>

    <div class="social-links-container">
        <ul class="social-links">
            <li>Share:</li>
            <li><a href="#"><img src="/wp-content/themes/main/assets/img/sustainability/facebook.png" class="social-icon-facebook"></a></li>
            <li><a href="#"><img src="/wp-content/themes/main/assets/img/sustainability/twitter.png" class="social-icon"></a></li>
            <li><a href="#"><img src="/wp-content/themes/main/assets/img/sustainability/whatsapp.png" class="social-icon"></a></li>
            <li><a href="#"><img src="/wp-content/themes/main/assets/img/sustainability/linkedin.png" class="social-icon"></a></li>
        </ul>

    </div>
</div>

<div class="content-container">
    <p>
        Jollibee Group Chairman and Founder, Tony Tan Caktiong, decided to pursue a bold and 
        valuable idea back in 2008. He thought: what if the company were to buy directly from 
        farmers so they can have a regular and stable market to sell to? This comes from a 
        recognition that even if agriculture is one of the country's key sectors, farmers remain 
        among the country's most vulnerable. Their lack of opportunities and resources prevents 
        them from earning a higher income.
    </p>

    <p>
        Jollibee Group Foundation (JGF), the company's social development arm, then took on the 
        challenge of translating the idea into the Farmer Entrepreneurship Program (FEP), which 
        would eventually link small-scale farmers to their supply chain.
    </p>

    <p>
        Today, the white onions, green bell peppers, tomatoes, and other vegetables that the company 
        uses in Jollibee, Chowking, Greenwich, and Mang Inasal come directly from the seventeen (17) 
        accredited farmer groups located in nine (9) provinces. The company currently sources about 
        15% of its vegetable requirements from Farmer Entrepreneurship Program farmers, giving them 
        a stable market for their produce and emboldening them to dream of better lives.
    </p>

    <p>
        Since 2009, FEP farmers have consolidated and delivered more than 7,000 metric tons or 700 
        truckloads of vegetables to the Jollibee Group, earning more than P300 million in total sales. 
        Furthermore, 94% of FEP farmer groups are already GAP-certified as the others continue to work 
        towards this milestone. 
    </p>

    <p>
        In extending its mission to rural communities, the Jollibee Group has helped smallholder farmers 
        gain greater pride in their profession and they too become part of the mission of bringing the 
        joy of eating to everyone.
    </p>

    <p>
    To learn more about the Farmer Entrepreneurship Program and to watch the video essay inspired by 
    the growth of FEP farmers, visit the Jollibee Group Foundation official Facebook Page at <a href="#">https://fb.watch/eMxKqKWXgI/ </a> 
    </p>
</div>




<div class="card bottom-page" style="width: 100%;">
  <div class="row bottom-row-section g-0">
    <div class="boy-pic-container">
      <img src="/wp-content/themes/main/assets/img/sustainability/boy.png" class="boy-pic" alt="...">
    </div>

    <div class="col-md-8 reps">
            <div class="reports-container">
                <div>
                    <p class="reports">Reports</p>
                    <p class="jfc-groups">Learn more about the Jollibee Group's commitment to sustainability through our published ESG reports</p>
                </div>
                <div>
                    <button class="view-all-stories-button2">VIEW ALL STORIES</button>
                </div>   
            </div>

            <p class="jollibee-foundation-link">To know more about the Jollibee Group Foundation, visit <a class="links" href="#">www.JollibeeFoundation.org</a></p>
    </div>
  
  </div>
</div>

<?php get_footer(null, array('js_files' => array(
  // \assets\css\
  'common/swiper-bundle.min.js',
  'common/sustain-main'
  ))); ?>