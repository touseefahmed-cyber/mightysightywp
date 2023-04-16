<!-- BANNER SECTION -->
<section class="w-100 float-left banner-con">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center order-lg-0 order-2">
                <div class="banner-txt">
                    <h1 class="font-extarablod primary-color" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('banner_title'); ?></h1>
                    <p class="secondary-color font-medium" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('banner_caption'); ?></p>
                    <div class="generic-btn">
                        <a href="<?php echo get_field('banner_blue_btn_link'); ?>" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('banner_blue_btn_text'); ?></a>
                        <a href="<?php echo get_field('banner_transparant_btn_link'); ?>" class="transparent-btn" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('banner_transparent_btn_text'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img text-center position-relative">
                  <div class="small-bubble bubble"></div>
                  <div class="medium-bubble bubble"></div>
                    <figure class="mb-0">
                      <img src="<?php the_field('banner_image'); ?>" alt="shop-img">
                    </figure>
                    <div class="large-bubble bubble"></div>
                  <div class="extra-large-bubble bubble"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="separator-bottom"></div>
  </section>
  <!-- BANNER SECTION -->
  <!-- LOGO SECTION -->
  <div class="main-logo-sec w-100 float-left">
    <div class="wrapper">



       


      <div class="logo-con align-items-center justify-item-center w-100">
      <?php
        // Check rows existexists.
        if( have_rows('image_slider') ):

            // Loop through rows.
            while( have_rows('image_slider') ) : the_row();
             // Load sub field value.
                $sub_value = get_sub_field('individual_image');
            // Do something...
        ?>
        <figure class="mb-0" data-aos="fade-up" data-aos-duration="600">
          <img src="<?php echo $sub_value;?>">
        </figure>
        <?php 
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>

      </div>
    </div>
  </div>
  <!-- LOGO SECTION -->
  <!-- TAB SECTION -->
  <section class="tab-con float-left w-100 text-center">
    <div class="wrapper">
      <div class="tab-con-heading">
        <h2 class="primary-color font-extarablod" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('tab_main_title'); ?></h2>
        <p class="secondary-color font-medium" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('tab_main_caption'); ?></p>
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <?php
        // Check rows existexists.
        if( have_rows('tab_settings') ):

            // Loop through rows.
            while( have_rows('tab_settings') ) : the_row();
             // Load sub field value.
                $tab_title = get_sub_field('tab_title');
                $tab_image = get_sub_field('tab_image');
                $tab_slug = sanitize_title($tab_title);
            // Do something...
        ?>
        <li class="nav-item">
          <a class="nav-link " id="<?php echo $tab_slug; ?>-tab" data-toggle="tab" href="#store" role="tab" aria-controls="store" aria-selected="true"><?php echo $tab_title; ?></a>
        </li>
        <?php 
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>
      </ul>
      <div class="tab-content position-relative" id="myTabContent" data-aos="fade-up" data-aos-duration="600">
      <?php
        // Check rows existexists.
        if( have_rows('tab_settings') ):

            // Loop through rows.
            while( have_rows('tab_settings') ) : the_row();
             // Load sub field value.
                $tab_title = get_sub_field('tab_title');
                $tab_image = get_sub_field('tab_image');
                $tab_slug = sanitize_title($tab_title);
                $count = get_row_index();
            // Do something...
        ?>
            <div class="tab-pane <?php echo $count == '1' ? 'show active' : ''; ?>" id="<?php echo $tab_slug; ?>" role="tabpanel" aria-labelledby="<?php echo $tab_slug; ?>-tab">
              <figure class="mb-0">
                <img src="<?php echo $tab_image; ?>" alt="">
              </figure>
            </div>
            <?php 
            // End loop.
            endwhile;

            // No value.
            else :
                // Do something...
            endif;
            ?>

            <?php if( have_rows('tab_settings') ): ?>

            <div class="input-group group-end">
              <a class="btn btnPrevious"><i class="fas fa-angle-left"></i></a>
              <a class="btn btnNext"><i class="fas fa-angle-right"></i></a>
            </div>
            <?php   endif; ?>
      </div>      
    </div>
  </section>
  <!-- TAB SECTION -->
  <!--  SECTION -->
  <section class="info-sec float-left w-100 bg-f6f6f9 position-relative">
    <div class="separator-top"></div>
    <div class="wrapper2">
        <div class="info-form-con w-100 float-left">
          <div class="section-heading text-center ml-auto mr-auto">
            <span class="small-heading d-inline-block" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('info_small_title'); ?></span>
            <h2 class="large-heading" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('info_main_title'); ?></h2>
            <p class="medium-heading mb-0" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('info_main_caption'); ?></p>
          </div>
          <div class="info-inner-con bg-white position-relative d-flex align-items-center justify-content-between" data-aos="fade-up" data-aos-duration="600">
            <div class="round-ball"></div>
            <div class="info-inner-left bg-white">
              <h5 class="font-blod color-263672">Add new user</h5>
              <form class="user-form">
                <ul class="list-unstyled w-100 float-left">
                  <li>
                    <div class="input-field">
                      <label>User email address</label>
                      <input type="email">
                    </div>
                  </li>
                  <li>
                    <label>Permission</label>
                    <div class="d-flex input-radio-con">
                      <div class="input-radio">
                        <input type="radio" id="radio1" name="radio">
                        <label for="radio1">Admin</label>
                      </div>
                      <div class="input-radio">
                        <input type="radio" id="radio2" name="radio">
                        <label for="radio2">Editor</label>
                      </div>
                      <div class="input-radio">
                        <input type="radio" id="radio3" name="radio">
                        <label for="radio3">Viewer.</label>
                      </div>
                    </div>
                    <div class="veiw-detalis">
                      <span>View / Upload / Donwload / tag / manage users</span>
                      <span>View / Upload / Donwload / tag / </span>
                    <span>View / Donwload</span>
                    </div>
                  </li>
                </ul>
                <div class="w-100 float-left">
                  <div class="cancle-btn">
                    <a href="#">Cancel</a>
                  </div>
                  <div class="add-btn">
                    <a href="#">Add user</a>
                  </div>
                </div>
              </form>
            </div>
            <div class="info-inner-right">
              <div class="info-inner-heading">
                <span class="small-heading d-inline-block"><?php echo get_field('user_small_heading'); ?></span>
                <h4 class="large-heading mb-0"><?php echo get_field('user_main_title'); ?></h4>
              </div>
              <div class="account-info  d-flex align-items-center  justify-content-between">
                <div>
                  <span class="d-block primary-color font-blod"><?php echo get_field('user_account_title'); ?></span>
                  <small class="d-block font-blod color-66d1b8"><?php echo get_field('user_account_value'); ?></small>
                </div>
                <div>
                  <span class="d-block primary-color font-blod"><?php echo get_field('user_enterprise_account_title'); ?></span>
                  <small class="d-block font-blod color-66d1b8"><?php echo get_field('user_enterprise_account_value'); ?></small>
                </div>
              </div>
            </div>
  
          </div>
        </div>
        <div class="info-second-con w-100 float-left" data-aos="fade-up" data-aos-duration="600">
          <div class="row justify-md-content-left justify-content-center">
            <div class="col-md-6 col-sm-8 col-12 d-flex">
              <div class="info-items bg-white">
                <div class="info-inner-heading">
                  <span class="small-heading d-inline-block"><?php echo get_field('user_storage_small_heading'); ?></span>
                  <h4 class="large-heading mb-0"><?php echo get_field('user_storage_main_title'); ?></h4>
                </div>
                <div class="account-info d-flex align-items-center  justify-content-between">
                  <div>
                    <span class="d-block primary-color font-blod"><?php echo get_field('user_storage_free_title'); ?></span>
                    <small class="d-block font-blod color-66d1b8"><?php echo get_field('user_storage_free_value'); ?></small>
                  </div>
                  <div>
                    <span class="d-block primary-color font-blod"><?php echo get_field('user_storage_enterprise_title'); ?></span>
                    <small class="d-block font-blod color-66d1b8"><?php echo get_field('user_storage_enterprise_value'); ?></small>
                  </div>
                </div>
                <figure class="mb-0">
                  <img src="<?php echo get_field('user_storage_image'); ?>" alt="download-img">
                </figure>
                <div class="term-small-round"></div>
                <div class="term-medium-round"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-8 col-12 d-flex">
              <div class="info-items bg-white info-items2">
                <div class="info-inner-heading">
                  <span class="small-heading d-inline-block"><?php echo get_field('file_sharing_small_heading'); ?></span>
                  <h4 class="large-heading mb-0"><?php echo get_field('file_sharing_main_title'); ?></h4>
                </div>
                <div class="account-info d-flex align-items-center  justify-content-between">
                  <div>
                    <span class="d-block primary-color font-blod"><?php echo get_field('file_sharing_free_title'); ?> </span>
                    <small class="d-block font-blod color-66d1b8"><?php echo get_field('file_sharing_free_value'); ?></small>
                  </div>
                  <div>
                    <span class="d-block primary-color font-blod"><?php echo get_field('file_sharing_enterprise_title'); ?></span>
                    <small class="d-block font-blod color-66d1b8"><?php echo get_field('file_sharing_enterprise_value'); ?></small>
                  </div>
                </div>
                <figure class="mb-0">
                  <img src="<?php echo get_field('file_sharing_image'); ?>" alt="download-img">
                </figure>
                <div class="term2-small-round"></div>
                <div class="term2-medium-round"></div>
              </div>
            </div>
  
          </div>
        </div>
        <div class="pricing-table-con position-relative w-100 float-left d-md-flex align-items-center justify-content-between" data-aos="fade-up" data-aos-duration="600">
          <div class="pricing-table-title">
            <span class="small-heading d-inline-block"><?php echo get_field('pricing_small_heading'); ?></span>
            <h3 class="large-heading mb-md-0"><?php echo get_field('pricing_main_title'); ?></h3>
          </div>
          <div class="pricing-table d-sm-flex">
            <ul class="list-unstyled mb-0 pricing-table-list">
              <li>Users</li>
              <li>Storage</li>
              <li>Share</li>
              <li>Branding</li>
              <li>Spaces</li>
              <li>Support</li>
            </ul>
            <div class="pricing-table-item">
              <h4 class="font-extarablod primary-color">Free Account</h4>
              <ul class="list-unstyled mb-0">
                <li data-label="Users">5</li>
                <li data-label="Storage">20gb</li>
                <li data-label="Share">Up-to 10gb</li>
                <li data-label="Branding"><i class="fas fa-times"></i></li>
                <li data-label="Spaces">1</li>
                <li data-label="Support">Standard</li>
              </ul>
              <div class="pricing-btn">
                <a href="#">FREE</a>
              </div>
            </div>
            <div class="pricing-table-item">
              <h4 class="font-extarablod primary-color">Enterprise</h4>
              <ul class="list-unstyled mb-0">
                <li data-label="Users">Unlimited</li>
                <li data-label="Storage">Unlimited</li>
                <li data-label="Share">Unlimited</li>
                <li data-label="Branding"><i class="fas fa-check"></i></li>
                <li data-label="Spaces">Unlimited</li>
                <li data-label="Support">Premium</li>
              </ul>
              <div class="pricing-btn">
                <a href="#">Let’s talk</a>
              </div>
            </div>
          </div>
          <div class="price-medium-round"></div>
          <div class="price-small-round"></div>
        </div>
    </div>
    <div class="separator-bottom"></div>
  </section>
  <!--  SECTION -->
  <!--TEXT-IMG-BLOG-->
  <section class="text-img-sec float-left w-100">
    <div class="wrapper">
      <div class="text-img">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div>
              <div class="text-medium-round"></div>
              <div class="text-large-round"></div>
              <figure class="mb-0" data-aos="fade-up" data-aos-duration="600">
                <img src="<?php echo get_field('accessible_image'); ?>" alt="text-img">
              </figure>
            </div>
          </div>
          <div class="col-lg-7">
              <div class="section-heading ml-auto mr-auto">
                <span class="small-heading d-inline-block" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('accessible_small_heading'); ?></span>
                <h2 class="large-heading" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('accessible_main_title'); ?></h2>
                <p class="medium-heading mb-0" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('accessible_caption'); ?></p>
              </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--TEXT-IMG-BLOG-->
  <section class="w-100 float-left user-con">
    <div class="wrapper">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-0 order-2">
          <div class="section-heading">
            <span class="small-heading d-inline-block" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('interface_small_heading'); ?></span>
            <h2 class="large-heading" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('interface_main_title'); ?></h2>
            <p class="medium-heading" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('interface_caption'); ?></p>
            <div class="generic-btn" data-aos="fade-up" data-aos-duration="600">
              <a href="<?php echo get_field('interface_blue_btn_link'); ?>"><?php echo get_field('interface_blue_btn_text'); ?></a>
          </div>
          </div>
        </div>
        <div class="col-lg-6 position-relative">
          <div class="veiw-list position-relative" data-aos="fade-up" data-aos-duration="600">
            <div class="veiw-small-round"></div>
            <div class="veiw-medium-round"></div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="far fa-folder"></i> Folders</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-list"></i> List view </a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-th-large"></i> File view</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-map-marker-alt"></i> Map view</a>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <figure class="mb-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-img.png" alt="map-img">
                </figure>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <figure class="mb-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-img.png" alt="map-img">
                </figure>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <figure class="mb-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-img.png" alt="map-img">
                </figure>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <figure class="mb-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-img.png" alt="map-img">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SOLUTION BOXES-->
  <section class="solution-sec float-left w-100">
    <div class="wrapper">
      <div class="section-heading text-center ml-auto mr-auto">
        <span class="small-heading d-inline-block" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('solution_small_heading'); ?></span>
        <h2 class="large-heading" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('solution_main_title'); ?></h2>
      </div>
      <div class="solution-boxes">
        <ul class="mb-0 list-unstyled">
          <li class="d-inline-block" data-aos="fade-up" data-aos-duration="600">
            <div class="item-heading d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-img1.png" alt="solution-img" class="d-inline-block">
              <h5 class="d-inline-block font-extarablod primary-color mb-0">100% Security</h5>
            </div>
            <p class="font-medium mb-0">
              Feel assured that your assets are safe. We use the most advanced Amazon AWS servers with 100% security  guaranteed.
            </p>
          </li>
          <li class="d-inline-block" data-aos="fade-up" data-aos-duration="600">
            <div class="item-heading d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-img2.png" alt="solution-img" class="d-inline-block">
              <h5 class="d-inline-block font-extarablod primary-color mb-0">Your branding</h5>
            </div>
            <p class="font-medium mb-0">Sharing assets with third suppliers and clients? Choose your theme colours and logo so you account is always on brand.</p>
          </li>
          <li class="d-inline-block" data-aos="fade-up" data-aos-duration="600">
            <div class="item-heading d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-img3.png" alt="solution-img" class="d-inline-block">
              <h5 class="d-inline-block font-extarablod primary-color mb-0">24hr Support</h5>
            </div>
            <p class="font-medium mb-0">Be rest assured that if you have any issue our team is always at hand to answer your questions and offer support.</p>
          </li>
          <li class="d-inline-block" data-aos="fade-up" data-aos-duration="600">
            <div class="item-heading d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-img4.png" alt="solution-img" class="d-inline-block">
              <h5 class="d-inline-block font-extarablod primary-color mb-0">Upgrade options</h5>
            </div>
            <p class="font-medium mb-0">Cloud based storage means unlimited capacity. Start with a free account and if you need, upgrade to enterprise.</p>
          </li>
          <li class="d-inline-block" data-aos="fade-up" data-aos-duration="600">
            <div class="item-heading d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-img5.png" alt="solution-img" class="d-inline-block">
              <h5 class="d-inline-block font-extarablod primary-color mb-0">Manage user roles</h5>
            </div>
            <p class="font-medium mb-0">With admin capabilities, you can manage  account access and set rules for each user including thrid parties and suppliers.</p>
          </li>
          <li class="d-inline-block" data-aos="fade-up" data-aos-duration="600">
            <div class="item-heading d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-img6.png" alt="solution-img" class="d-inline-block">
              <h5 class="d-inline-block font-extarablod primary-color mb-0">Multiple accounts</h5>
            </div>
            <p class="font-medium mb-0">Have more than one brand? Create multiple account spaces so you can to manage them all independently.</p>
          </li>
        </ul>

      </div>
    </div>
  </section>
  <!-- SOLUTION BOXES-->
  <!--TESTIMONIAL  SECTION -->
  <section class="testimonial-sec text-center float-left w-100">
    <div class="wrapper">
      <div class="testiminial-heading">
        <h5 class="small-heading" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('testimonial_title'); ?></span>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial-text">
              <p class="font-extarablod primary-color" data-aos="fade-up" data-aos-duration="600">
                “As we look to grow our social media presence and deliver timely <br>
                content to our audiences across numerous channels, we use <br>
                MightySighty daily. We’ve been able to catalogue thousands of <br>
                images and make them available to anyone in the business who <br>
                needs them at any time.”
              </p>
              <figure class="mb-0" data-aos="fade-up" data-aos-duration="600"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-logo.png" alt="logo"></figure>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-text">
              <p class="font-extarablod primary-color" data-aos="fade-up" data-aos-duration="600">
                “As we look to grow our social media presence and deliver timely <br>
                content to our audiences across numerous channels, we use <br>
                MightySighty daily. We’ve been able to catalogue thousands of <br>
                images and make them available to anyone in the business who <br>
                needs them at any time.”
              </p>
              <figure class="mb-0" data-aos="fade-up" data-aos-duration="600"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-logo.png" alt="logo"></figure>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-text">
              <p class="font-extarablod primary-color" data-aos="fade-up" data-aos-duration="600">
                “As we look to grow our social media presence and deliver timely <br>
                content to our audiences across numerous channels, we use <br>
                MightySighty daily. We’ve been able to catalogue thousands of <br>
                images and make them available to anyone in the business who <br>
                needs them at any time.”
              </p>
              <figure class="mb-0" data-aos="fade-up" data-aos-duration="600"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-logo.png" alt="logo"></figure>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arror-l.png" alt="arrow">
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arror-l.png" alt="arrow">
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!--TESTIMONIAL  SECTION -->
  <!--CTA SECTION-->
  <section class="cta-section position-relative float-left w-100 text-center">
    <div class="separator-top"></div>
    <div class="wrapper">
      <div class="cta-content">
        <h3 class="font-extarablod text-white" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('managment_title'); ?></h3>
        <div class="secondary-btn cta-buttons">
          <a href="<?php echo get_field('managment_account_btn_link'); ?>" class="font-blod" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('managment_account_btn_text'); ?></a>
          <a href="<?php echo get_field('managment_demo_btn_link'); ?>" class="font-blod" data-aos="fade-up" data-aos-duration="600"><?php echo get_field('managment_demo_btn_text'); ?></a>
        </div>
      </div>
    </div>
  </section>
  <!--CTA SECTION-->