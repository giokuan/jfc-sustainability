<?php
/*
Template Name: Sustainability Stories
*/
?>


<?php
 get_header(null, array('css_files' => array(
    // \assets\css\
    'sustainability-css/stories-styles',
    'pages/swiper-bundle.min'
  ))); 

  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

?>


<div class="people">
    <img class="stories-section__image-img " src="/wp-content/themes/main/assets/img/sustainability/stories-banner-pic.png">
    <img class="stories-section__image-img-mobile " src="/wp-content/themes/main/assets/img/sustainability/stories-banner-pic-mobile.png">
</div>


<div class="menu-container">
    <nav class="nav menu">
    <a class="nav-link active" aria-current="page" href="#">Food</a>
    <a class="nav-link " href="http://jollibeegroup.local/stories-people">People</a>
    <a class="nav-link" href="http://jollibeegroup.local/stories-planet">Planet</a>
    <a class="nav-link" href="#">Press Release</a>
    <a class="nav-link" href="#">All Stories</a>
    </nav>
</div>


<div class="menu-container-dropdown">
    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        All Stories
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">All Stories</a></li>
        <li><a class="dropdown-item" href="#">Press Release</a></li>
        <li><a class="dropdown-item" href="#">Planet</a></li>
        <li><a class="dropdown-item" href="#">People</a></li>
        <li><a class="dropdown-item" href="#">Food</a></li>
    </ul>
</div>

<!-- ----------------FOOD MENU TAB --------------------------->
<div id="food-card-container" class="food-card-container">
    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="http://jollibeegroup.local/stories-inner-page" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
       
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>

    <div class="card">
        <img src="/wp-content/themes/main/assets/img/sustainability/stories-pic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Forbes' World's Best Employers</h5>
            <p class="dates">August, 2022</p>
            <p class="card-text">Only three companies from the Philippines were included in the list for this award, and...</p>
        </div>
        
        <div class="card-body">
            <a href="#" class="read-more">Read more &nbsp; <img class="read-more" src="/wp-content/themes/main/assets/img/sustainability/read_more.png"> </a>
        
        </div>
    </div>
</div>



<div class="pagination-container">
  <ul id="pagination">
    <li ><a href="#" ><img src="/wp-content/themes/main/assets/img/sustainability/lt.png" class="lt" ></a></li>
    <li><a href="#" class="active">1</a></li>
    <li><a href="http://jollibeegroup.local/stories-people" >2</a></li>
    <li><a href="http://jollibeegroup.local/stories-planet">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><img src="/wp-content/themes/main/assets/img/sustainability/gt.png" class="gt" ></a></li>
  </ul> 
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