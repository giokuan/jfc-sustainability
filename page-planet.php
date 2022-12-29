<?php
/*
Template Name: Sustainability Planet
*/
?>


<?php
 get_header(null, array('css_files' => array(
    // \assets\css\
    'sustainability-css/planet-styles',
    'pages/swiper-bundle.min'
  ))); 

  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

?>

<div class="planet">
    <img class="planet-section__image-img " src="/wp-content/themes/main/assets/img/sustainability/Treeplanting.png">
    <div class="ellipse">
    <p class="text-planet-title">PLANET</p>
    <p class="text-planet-subtitle">We Treat The Planet Responsibly</p>
    <p class="text-planet-content">Packaging & Recycling, Energy, Water, and Waste are areas that we look into as we take a step ahead in treating our planet responsibly</p>
    </div>
</div>


    <div>
        <h4 class="our-planet-journey">OUR PLANET JOURNEY</h4>
      
    </div>


    <div>
        <h4 class="stories-of-joy">STORIES OF JOY: PLANET</h4>
    </div>


<div class=" main-container">
    <div class="stories-of-joy-row1">
        <div >
            <img class="factory-pic"  src="/wp-content/themes/main/assets/img/sustainability/factory.png">
        </div>
        <div class="uplifting-container">
            <p class="uplifting">Uplifting the lives of over 500 farmers, and counting!</p>
            <p class="dates">July 29, 2022</p>
            <p class="stories-of-joy-content">JFC's Corporate Supply Chain (CSC) provides manufacturing 
                and logistics services to the various brands of FC in the Philippines through Zenith Foods 
                Corporation and JWS...
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
            <p class="uplifting">JFC Continues the Use of Solar Panel in Select Jollibee Stores in PH</p>
            <p class="dates">July 29, 2022</p>
            <p class="stories-of-joy-content">As part of our thrust in treating the planet responsibly, 
                we have several stores in Southern Luzon with installations of solar panels which reduce 
                electricity consumption from non...
            </p>

            <p class="stories-of-joy-content-mobile">The Food Safety Cleanliness & Condition (FSC) Star Awards is 
                held annually and is a highly awaited event in the organization. It... 
            </p>
            <div class="read-more-container">
                <p class="read-more">Read more 	&nbsp; <img class="read-more-logo" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </p>
            </div>
         
        </div>
        <div >
            <img class="jollibee-roof-pic" src="/wp-content/themes/main/assets/img/sustainability/jollibee-roof.png">
        </div>
        
    </div>
</div>


<div class="view-all-stories-container" >
    <button class="view-all-stories-button">VIEW ALL STORIES</button>
    <p class="our-planet-roadmap">Our Planet Roadmap</p>
    <p class="pillars">&nbsp; 	&nbsp;	&nbsp; We have identified three pillars towards treating the planet
        responsibly. Learn more about the goals we have set and our updates foeach.  
    </p>
</div>



<section class="main-section">
    <div class="card-container">
        <div id="cards" class="card card1" >
            <img src="/wp-content/themes/main/assets/img/sustainability/packaging_and_recycling_pic.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p id="cards-text-stories" class="card-text">PACKAGING AND RECYCLING</p>
            </div>
        </div>

        <div id="cards" class="card card2" >
            <img src="/wp-content/themes/main/assets/img/sustainability/waste_reduction_pic.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p id="cards-text-stories" class="card-text">WASTE REDUCTION</p>
            </div>
        </div>

        <div id="cards" class="card card3" >
            <img src="/wp-content/themes/main/assets/img/sustainability/energy_and_water_efficiency_pic.png" class="card-img-top" alt="...">
            <div class="card-body card-body-card3">
                <p id="cards-text-stories" class="card-text">ENERGY AND WATER EFFICIENCY</p>
            </div>
        </div>

 


    <!-- <section> -->
        <div class="packaging-sustainability-container">
            <div class="card-headers">
                <ul class="nav nav-pills card-header-pills " aria-labelledby="dropdownMenuButton1">
                    <li class="nav-item">
                        <a class="nav-link packaging-sustainability" href="#">Packaging Sustainability</a>
                    </li>
                    
                </ul>
            </div>

        </div>

    <!-- </section> -->

    <div class="packaging-sustainability-container-dropdown">
        <a class="btn  btn-packaging-sustainability-container-dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Packaging Sustainability
        </a>

        <!-- <ul class="dropdown-menu vendor-audits" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Vendor Audits</a></li>
        
        </ul> -->
    </div>



<div class="goal-status">
    <div class="row">
    <div class="col-sm-4 ">
 
        <div class="card card-goal">
            <div class="card-header">
                Goal
            </div>
        <div class="card-body">
         
            <p id="card-text" >Improve <span class="card-text-span">packaging sustainability</span> across our brands  </p>
          

            <img class="responsible_and_consumption_pic" src="/wp-content/themes/main/assets/img/sustainability/responsible_and_consumption_pic.png" >
           
        </div>
        </div>
    </div>
    <div class="col-sm-8">
   
        <div class="card card-status ">
            <div class="card-header">
                Status
            </div>
        <div class="card-body">
         
            <p id="card-text"> We have put in into place various <span class="card-text-span">initiatives across 
                different regions,</span> and we remain committed towards <span class="card-text-span">finding solutions</span> on packaging sustainability.
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
                        <ul>
                            <li>
                                Between 69-96% of our dine-in transactions in our Greenwhich, Chowking, Jollibee, Pho24, and Panda Express 
                                stores already use reusable wares, which avoided over 133,291 Metric Tonnes of Packaging waste from landfills in 2020
                            </li>
                            <li>
                                Only 16% of our packaging still contains EPS/PS as of 2020. We are on our way towards our goal of eliminating it.
                            </li>
                        </ul>
                   
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