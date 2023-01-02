<?php
/*
Template Name: Sustainability People
*/
?>


<?php
 get_header(null, array('css_files' => array(
    // \assets\css\
    'sustainability-css/people-styles',
    'pages/swiper-bundle.min'
  ))); 

  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

?>

<div class="people">
    <img class="people-section__image-img " src="/wp-content/themes/main/assets/img/sustainability/farmers-banner.png">
    <div class="ellipse">
    <p class="text-people-title">PEOPLE</p>
    <p class="text-people-subtitle">We Help Make People's Lives Better</p>
    <p class="text-people-content">We foster an inclusive work environment for the growth and development of our employees, farmers, and communities</p>
    </div>
</div>


    <div>
        <h4 class="our-people-journey">OUR PEOPLE JOURNEY</h4>
      
    </div>


    <div>
        <h4 class="stories-of-joy">STORIES OF JOY: PEOPLE</h4>
    </div>


    <div class=" main-container">
    <div class="stories-of-joy-row1">
        <div >
            <img class="farmers-pic"  src="/wp-content/themes/main/assets/img/sustainability/farmers.png">
        </div>
        <div class="uplifting-container">
            <p class="uplifting">Uplifting the lives of over 500 farmers, and counting!</p>
            <p class="dates">July 29, 2022</p>
            <p class="stories-of-joy-content">Jollibee Group Chairman and Founder, Tony Tan Caktiong, decided 
                to pursue a bold and valuable idea back in 2008. He thought: what if the company were to buy 
                directly from farmers...
            </p>

            <p class="stories-of-joy-content-mobile">Jollibee Group Chairman and Founder, Tony Tan Caktiong, decided 
                to pursue a bold and valuable idea back in 2008. He thought:...

            </p>
            <div class="read-more-container">
                <p class="read-more">Read more &nbsp; <img class="read-more-logo" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </p>
            </div>
        </div>
    </div>

    <div class="stories-of-joy-row2">
        <div class="stories-of-joy-container">
            <p class="uplifting">Global Employer Excellence Awards for the Jollibee Group in 2021 </p>
            <p class="stories-of-joy-content">In 2021, we received best employer recognitions from Forbes, 
                World HRD Congress, and Universum Global as a result of the various engagement and retention 
                programs launched within...
            </p>

            <p class="stories-of-joy-content-mobile">In 2021, we received best employer recognitions from Forbes, 
                World HRD Congress, and Universum Global as a resu... 
            </p>
            <div class="read-more-container">
                <p class="read-more">Read more 	&nbsp; <img class="read-more-logo" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </p>
            </div>
         
        </div>
        <div >
            <img class="jollibee-crew-pic" src="/wp-content/themes/main/assets/img/sustainability/crews.png">
        </div>
        
    </div>
</div>


<div class="view-all-stories-container" >
    <button class="view-all-stories-button">VIEW ALL STORIES</button>
    <p class="our-people-roadmap">Our People Roadmap</p>
    <p class="pillars">&nbsp; &nbsp; &nbsp;We have identified four pillars towards helping make peoples 
        lives better. Learn more about the goals we have set and our updates for each.  
    </p>
</div>



<section class="main-section">
    <div class="card-container">
        <div id="cards" class="card card1" >
            <img src="/wp-content/themes/main/assets/img/sustainability/employee_welfare.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p id="cards-text-stories" class="card-text">EMPLOYEE WELFARE</p>
            </div>
        </div>

        <div id="cards" class="card card2" >
            <img src="/wp-content/themes/main/assets/img/sustainability/farmers_livelihood.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p id="cards-text-stories" class="card-text">FARMERS LIVELIHOOD</p>
            </div>
        </div>

        <div id="cards" class="card card3" >
            <img src="/wp-content/themes/main/assets/img/sustainability/community_support.png" class="card-img-top" alt="...">
            <div class="card-body card-body-card3">
                <p id="cards-text-stories" class="card-text">COMMUNITY SUPPORT</p>
            </div>
        </div>

        <div id="cards" class="card card4" >
            <img src="/wp-content/themes/main/assets/img/sustainability/good_governance.png" class="card-img-top" alt="...">
            <div class="card-body card-body-card4">
                <p id="cards-text-stories" class="card-text">GOOD GOVERNANCE</p>
            </div>
        </div>

 


        <div class="packaging-sustainability-container">
            <div class="card-headers">
                <ul class="nav nav-pills card-header-pills " aria-labelledby="dropdownMenuButton1">
                    <li class="nav-item">
                        <a class="nav-link packaging-sustainability" href="#">Training & Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link packaging-sustainability" href="#">High Employee Engagement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link packaging-sustainability" href="#">Equal Opportunities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link packaging-sustainability" href="#">Zero-Discrimination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link packaging-sustainability" href="#">Employment Opportunities to Vulnerable</a>
                    </li>
                    
                </ul>
            </div>
        </div>


    <div class="packaging-sustainability-container-dropdown">
        <a class="btn  btn-packaging-sustainability-container-dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Training & Development
        </a>
    </div>



<div class="goal-status">
    <div class="row">
    <div class="col-sm-4">
 
        <div class="card card-goal">
            <div class="card-header">
                Goal
            </div>
            <div class="card-body">
            
                <p id="card-text" >Provide <span class="card-text-span">all employees with training and development</span> that empowers them to achieve career milestones</p>
                <img class="descent_work_and_economic_growth_pic" src="/wp-content/themes/main/assets/img/sustainability/descent_work_and_economic_growth_pic.png" >
            
            </div>
        </div>
    </div>
    <div class="col-sm-8">
   
        <div class="card card-status ">
            <div class="card-header">
                Status
            </div>
        <div class="card-body">
         
            <p id="card-text"> We continue to provide <span class="card-text-span" >various learning opportunities for all our employees</span>
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
                                100% of our employees have undergone an Individual Development Plan. 100% of employees go thru a development intervention 
                                either thru Exposure, Experience, Environment or Education (4Es), and 100% of enrolled Key Talents complete the accelerated development program
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