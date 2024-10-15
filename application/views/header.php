<div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- <div class="color-scheme">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h4 class="color-scheme-title"><i class="far fa-palette"></i> Color Switcher</h4>
        <p class="color-scheme-text">Check template with your color</p>
        <div class="color-switch-btns">
            <button data-color="#2A07F9"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#068FFF"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#044DBC"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FFAF00"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#F80000"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#231E7A"><i class="fa-solid fa-droplet"></i></button>
        </div>
        <p class="color-scheme-text">Or custom color..</p>
        <input type="color" id="thcolorpicker" value="#2A07F9">
    </div>-->
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div> <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper visib">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home-handyman.html"><img src="assets/img/logo.png"  alt="Eco Zone"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                                        <li><a href="<?php echo base_url();?>about">About Us</a></li>
                                        <li><a href="<?php echo base_url();?>cleaning_services">Cleaning</a></li>
                                        <li><a href="<?php echo base_url();?>air_conditioning">Air Conditioning
                                        & Refrigeration</a></li>
                                        <li><a href="pest_control">Pest Control</a></li>
                                        <li><a href="<?php echo base_url();?>clients">Clients</a></li>
                                        <li class="menu-item-has-children">
                        <a href="#">Library</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url();?>photo_gallery">Photo Gallery</a></li>
                            <li><a href="<?php echo base_url();?>video_gallery">Video Gallery</a></li>
                        </ul>
                    </li>
                                        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li> 
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout2 visib">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li style="color:#000;font-weight: 600;font-size:16px"><i class="fas fa-location-dot"></i>P.O.Box: 31058, Doha – Qatar</li>
                                <li><i class="fas fa-headset"></i> <a style="color:#000;font-weight: 600;font-size:16px" href="tel:+97474717154">+974 74717154</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li  class="d-none d-md-inline-block"><i class="fas fa-messages"></i> <a style="color:#000;font-weight: 600;font-size:16px" href="mailto:ecozoneqatar@gmail.com">ecozoneqatar@gmail.com</a></li>
                                <li style="color:#000;font-weight: 600;font-size:16px"><i class="fas fa-clock"></i> Sun to Thur: 8.00 am - 7.00 pm</li>
                                <!-- <li><i class="fas fa-user"></i> <a href="contact.html">Sign In / Register</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="sticky-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="home-handyman.html"><img src="assets/img/logo.png" alt="Eco Zone"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="menu-area">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                    <li><a href="<?php echo base_url();?>">Home</a></li>
                                        <li><a href="<?php echo base_url();?>about">About Us</a></li>
                                        <li><a href="<?php echo base_url();?>cleaning_services">Cleaning</a></li>
                                        <li><a href="<?php echo base_url();?>air_conditioning">Air Conditioning
                                        & Refrigeration</a></li>
                                        <li><a href="pest_control">Pest Control</a></li>
                                        <li><a href="<?php echo base_url();?>clients">Clients</a></li>
                                        <li class="menu-item-has-children">
                        <a href="#">Library</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url();?>photo_gallery">Photo Gallery</a></li>
                            <li><a href="<?php echo base_url();?>video_gallery">Video Gallery</a></li>
                        </ul>
                    </li>
                                        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>  
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <a href="<?php echo base_url();?>contact" class="th-btn style3">Get A Quote<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    


     <!--==============================
    Mobile Menu
  ============================== -->
  <div class="th-menu-wrapper visibi">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home-handyman.html"><img src="assets/img/logo.png" style="width: 105px;" alt="Eco Zone"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                                        <li><a href="<?php echo base_url();?>about">About Us</a></li>
                                        <li><a href="<?php echo base_url();?>cleaning_services">Cleaning</a></li>
                                        <li><a href="<?php echo base_url();?>air_conditioning">Air Conditioning
                                        & Refrigeration</a></li>
                                        <li><a href="<?php echo base_url();?>pest_control">Pest Control</a></li>
                                        <li><a href="<?php echo base_url();?>clients">Clients</a></li>
                                        <li class="menu-item-has-children">
                        <a href="#">Library</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url();?>photo_gallery">Photo Gallery</a></li>
                            <li><a href="<?php echo base_url();?>video_gallery">Video Gallery</a></li>
                        </ul>
                    </li>
                                        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>  
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout2 visibi">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li style="color:#000;font-weight: 600;font-size:16px"><i class="fas fa-location-dot"></i>P.O.Box: 31058, Doha – Qatar</li>
                                <li><i class="fas fa-headset"></i> <a style="color:#000;font-weight: 600;font-size:16px" href="tel:+97474717154">+974 74717154</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li  class="d-none d-md-inline-block"><i class="fas fa-messages"></i> <a style="color:#000;font-weight: 600;font-size:16px" href="mailto:ecozoneqatar@gmail.com">ecozoneqatar@gmail.com</a></li>
                                <li style="color:#000;font-weight: 600;font-size:16px"><i class="fas fa-headset"></i> <a style="color:#000;font-weight: 600;font-size:16px" href="tel:+97474717154">+974 74717154</a></li>
                                <!-- <li><i class="fas fa-user"></i> <a href="contact.html">Sign In / Register</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="sticky-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="home-handyman.html"><img src="assets/img/logo.png" alt="Eco Zone"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="menu-area">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                    <li><a href="<?php echo base_url();?>">Home</a></li>
                                        <li><a href="<?php echo base_url();?>about">About Us</a></li>
                                        <li><a href="<?php echo base_url();?>cleaning_services">Cleaning</a></li>
                                        <li><a href="<?php echo base_url();?>air_conditioning">Air Conditioning
                                        & Refrigeration</a></li>
                                        <li><a href="<?php echo base_url();?>pest_control">Pest Control</a></li>
                                        <li><a href="<?php echo base_url();?>clients">Clients</a></li>
                                        <li class="menu-item-has-children">
                        <a href="#">Library</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url();?>photo_gallery">Photo Gallery</a></li>
                            <li><a href="<?php echo base_url();?>video_gallery">Video Gallery</a></li>
                        </ul>
                    </li>
                                        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>  
                                    </ul>
                                </nav>
                                <div class="header-button">
                                    <form action="#" class="header-search">
                                        <input type="text" placeholder="Search Services...">
                                        <button type="button" class="icon-btn"><i class="fal fa-search"></i></button>
                                    </form>
                                    <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <a href="contact.html" class="th-btn style3">Get A Quote<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--==============================
Hero Area
==============================-->