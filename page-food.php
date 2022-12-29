<?php
/*
Template Name: Sustainability Food2
*/
?>


<?php
 get_header(null, array('css_files' => array(
    // \assets\css\
    'sustainability-css/food-styles',
    'pages/swiper-bundle.min'
  ))); 

  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
?>



<div class="food2">
    <!-- <img class="food-section__image-img" src="https://bucketeer-3eb16243-2c1c-43d2-be4e-1c2b3664d293.s3.amazonaws.com/2021/06/history_milestone-update-min.png"></br></br> -->
    <img class="food-section__image-img " src="/wp-content/themes/main/assets/img/sustainability/_DSC2856.png">
    <div class="ellipse">
    <p class="text-food-title">FOOD</p>
    <p class="text-food-subtitle">We serve Food People trust</p>
    <p class="text-food-content">Food safety, quality, and nutrition are our anchors in earning the trust of our customers as we serve great-tasting food loved by millions</p>
    </div>
</div>

    <div>
        <h4 class="our-food-journey">OUR FOOD JOURNEY</h4>
        <!-- <img class="dash-line" src="/wp-content/themes/main/assets/img/sustainability/dash_line.png"> -->
    </div>


    <div>
        <h4 class="stories-of-joy">STORIES OF JOY: FOOD</h4>
    </div>




<div class=" main-container">
    <div class="stories-of-joy-row1">
        <div >
            <img class="food-safety-heroes"  src="/wp-content/themes/main/assets/img/sustainability/food_safety_heroes.png">
        </div>
        <div class="uplifting-container">
            <p class="uplifting">Jollibee Group Food Safety Practices Featured by WHO</p>
            <p class="dates">September 2022</p>
            <p class="stories-of-joy-content">The World Health Organization (WHO) has cited our food 
                safety practices in a published article  in 2021.  We organized a series of insightful 
                activities centered around the “5 Calls to...

            </p>

            <p class="stories-of-joy-content-mobile">The World Health Organization (WHO) has cited our food 
                safety practices in a published article  in 2021.  We organized... 

            </p>
            <div class="read-more-container">
                <p class="read-more">Read more &nbsp; <img class="read-more-logo" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </p>
            </div>
        </div>
    </div>

    <div class="stories-of-joy-row2">
        <div class="stories-of-joy-container">
            <p class="uplifting">Food Safety as a Way of Life</p>
            <p class="stories-of-joy-content">The Food Safety Cleanliness & Condition (FSC) Star Awards is 
                held annually and is a highly awaited event in the organization. It is one of the most 
                prestigious and coveted awards, because i...
            </p>

            <p class="stories-of-joy-content-mobile">The Food Safety Cleanliness & Condition (FSC) Star Awards is 
                held annually and is a highly awaited event in the organization. It... 
            </p>
            <div class="read-more-container">
                <p class="read-more">Read more 	&nbsp; <img class="read-more-logo" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </p>
            </div>
         
        </div>
        <div >
            <img class="food-safety-way-of-life" src="/wp-content/themes/main/assets/img/sustainability/food_safety_way_of_life.png">
        </div>
        
    </div>
</div>

<div class="view-all-stories-container" >
    <button class="view-all-stories-button">VIEW ALL STORIES</button>
    <p class="our-people-roadmap">Our Food Roadmap</p>
    <p class="pillars">&nbsp; 	&nbsp;	&nbsp; We have identified three pillars towards serving food that people
        trust. Learn more about the goals we have set and our updates for each.  
    </p>
</div>





<section class="main-section">
    <div class="card-container">
        <div id="cards" class="card card1" >
            <img src="/wp-content/themes/main/assets/img/sustainability/food_safety.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p id="cards-text-stories" class="card-text">FOOD SAFETY</p>
            </div>
        </div>

        <div id="cards" class="card card2" >
            <img src="/wp-content/themes/main/assets/img/sustainability/food_quality.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p id="cards-text-stories" class="card-text">FOOD QUALITY</p>
            </div>
        </div>

        <div id="cards" class="card card3" >
            <img src="/wp-content/themes/main/assets/img/sustainability/nutrition.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p id="cards-text-stories" class="card-text">NUTRITION & TRANSPARENCY</p>
            </div>
        </div>

 


    <!-- <section> -->
        <div class="stores-commissary">
            <div class="card-headers">
                <ul class="nav nav-pills card-header-pills " aria-labelledby="dropdownMenuButton1">
                    <li class="nav-item">
                        <a class="nav-link stores" href="#">Stores, Commissary, Logistics Audits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link vendor-audits" href="#">Vendor Audits</a>
                    </li>
                    
                </ul>
            </div>

        </div>

    <!-- </section> -->

    <div class="stores-commissary-dropdown">
        <a class="btn  btn-commissary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Stores, Commissary, Logistics Audits
        </a>

        <ul class="dropdown-menu vendor-audits" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Vendor Audits</a></li>
        
        </ul>
    </div>



<div class="goal-status">
    <div class="row">
    <div class="col-sm-4 ">
 
        <div class="card card-goal">
            <div class="card-header">
                Goal
            </div>
        <div class="card-body">
         
            <p id="card-text" >Continue to <span class="card-text-span">serve great tasting and safe foods</span> through 
                rigorous <span class="card-text-span"> audits and certifications</span> yearly, across all our <span class="card-text-span"> stores, commissaries </span> and logistics
            </p>

            <img class="zero-hunger-pic" src="/wp-content/themes/main/assets/img/sustainability/zero_hunger.png" >
           
        </div>
        </div>
    </div>
    <div class="col-sm-8">
   
        <div class="card card-status ">
            <div class="card-header">
                Status
            </div>
        <div class="card-body">
         
            <p id="card-text"> <span class="card-text-span"> 100% </span>of our stores, commissaries, and logistics worldwide
               <span class="card-text-span"> undergo various internal and/or third-party assessments yearly.</span> We have also 
                rolled out  <span class="card-text-span">Food Safety- COVID Standards and Control Measures,</span> in line with 
                each markets' local guidelines, to safeguard our employees andcustomers.
            </p>
           
        

        <!-- ################  Accordion Start############### -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Philippines
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We adhere to HACCP, ISO 22000:2018, and FSSC22000, ISO 9001:2015, Transported Asset Protection Association (TAPA), 
                        and Good Distribution Practice (GDP)
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        China
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        North America
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        EMEAA
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
            </div>
    <!-- ################  Accordion End ############### -->
        </div>
        </div>
    </div>
    </div>
</div>
</div>
</section>




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