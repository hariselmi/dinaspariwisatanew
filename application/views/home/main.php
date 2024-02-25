    <!-- start hero header (classic) -->
    <div class="align-items-center bg-dark d-flex hero-header-classic overflow-hidden position-relative">
        <!-- start background image -->
        <div class="bg-image-overlay bg-gradient-vertical js-bg-image bg-cover bottom-0 end-0 position-absolute start-0 top-0" data-image-src="<?=base_url()?>assets/images/header/lg-02.jpg"></div>
        <!-- end /. background image -->
        <div class="container position-relative z-1">
            <div class="hero-header-subtitle text-center text-white text-uppercase mb-3">WE ARE #1 ON THE MARKET</div>
            <h1 class="display-1 fw-bold hero-header_title text-capitalize text-white text-center mb-5">We're Here to Help You<br class="d-none d-lg-block"> <span class="font-caveat text-span">Navigate</span> While Traveling</h1>
            <div class="lead mb-4 mb-sm-5 text-center text-white">You'll get comprehensive results based on the provided location.</div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- start search content -->
                    <div class="border-0 card d-flex flex-md-row position-relative search-wrapper">
                        <div class="align-items-center d-flex search-field w-100">
                            <div class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                            <!-- start input -->
                            <input type="email" class="form-control search-input" placeholder="What are you looking for?">
                            <!-- end /. input -->
                        </div>
                        <div class="vertical-divider"></div>
                        <div class="align-items-center d-flex search-field w-100">
                            <div class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                            <!-- start select -->
                            <select class="form-select search-select-field">

                            <?php
                            foreach ($q_location as $key => $value) {  ?>  
                                    
                                <option value="<?$value->id?>"><?=$value->nama?></option>                             

                            <?php    }  ?>  
                                
                            </select>
                            <!-- end /. select -->
                        </div>
                        <input type="submit" value="Search places" class="btn btn-primary rounded-5 mt-3 mt-md-0">
                    </div>
                    <!-- end /. search content -->
                </div>
            </div>
        </div>
    </div>
    <!-- end /. hero header (classic) -->
    <!-- start categories -->
    <div class="bg-dark overflow-hidden position-relative py-5 text-white">
        <div class="container pb-4">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Categories</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Featured Categories</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="row g-3 g-ld-4">
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- start category -->
                    <div class="align-items-center bg-blur border-0 card-hover d-flex flex-fill flex-wrap p-3 p-sm-3 rounded-4 shadow-sm w-100">
                        <div class="flex-shrink-0">
                            <div class="align-items-center bg-dark category-icon-box d-flex fs-4 justify-content-center rounded-3 text-primary">
                                <i class="fa-solid fa-building-user"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-md-3">
                            <h3 class="fs-19 fw-semibold mb-1"><a href="listings-map-grid-1.html">Appartment</a></h3>
                            <p class="mb-0 small">99+ listings</p>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold gap-2 link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- end /. category -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- start category -->
                    <div class="align-items-center bg-blur border-0 card-hover d-flex flex-fill flex-wrap p-3 p-sm-3 rounded-4 shadow-sm w-100">
                        <div class="flex-shrink-0">
                            <div class="align-items-center bg-dark category-icon-box d-flex fs-4 justify-content-center rounded-3 text-primary">
                                <i class="fa-solid fa-utensils"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-md-3">
                            <h3 class="fs-19 fw-semibold mb-1"><a href="listings-map-grid-1.html">Restaurant</a></h3>
                            <p class="mb-0 small">55+ listings</p>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold gap-2 link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- end /. category -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- start category -->
                    <div class="align-items-center bg-blur border-0 card-hover d-flex flex-fill flex-wrap p-3 p-sm-3 rounded-4 shadow-sm w-100">
                        <div class="flex-shrink-0">
                            <div class="align-items-center bg-dark category-icon-box d-flex fs-4 justify-content-center rounded-3 text-primary">
                                <i class="fa-solid fa-headphones"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-md-3">
                            <h3 class="fs-19 fw-semibold mb-1"><a href="listings-map-grid-1.html">Music</a></h3>
                            <p class="mb-0 small">55+ listings</p>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold gap-2 link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- end /. category -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- start category -->
                    <div class="align-items-center bg-blur border-0 card-hover d-flex flex-fill flex-wrap p-3 p-sm-3 rounded-4 shadow-sm w-100">
                        <div class="flex-shrink-0">
                            <div class="align-items-center bg-dark category-icon-box d-flex fs-4 justify-content-center rounded-3 text-primary">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-md-3">
                            <h3 class="fs-19 fw-semibold mb-1"><a href="listings-map-grid-1.html">Shopping</a></h3>
                            <p class="mb-0 small">80+ listings</p>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold gap-2 link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- end /. category -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- start category -->
                    <div class="align-items-center bg-blur border-0 card-hover d-flex flex-fill flex-wrap p-3 p-sm-3 rounded-4 shadow-sm w-100">
                        <div class="flex-shrink-0">
                            <div class="align-items-center bg-dark category-icon-box d-flex fs-4 justify-content-center rounded-3 text-primary">
                                <i class="fa-solid fa-tv"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-md-3">
                            <h3 class="fs-19 fw-semibold mb-1"><a href="listings-map-grid-1.html">TV Shows</a></h3>
                            <p class="mb-0 small">96+ listings</p>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold gap-2 link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- end /. category -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- start category -->
                    <div class="align-items-center bg-blur border-0 card-hover d-flex flex-fill flex-wrap p-3 p-sm-3 rounded-4 shadow-sm w-100">
                        <div class="flex-shrink-0">
                            <div class="align-items-center bg-dark category-icon-box d-flex fs-4 justify-content-center rounded-3 text-primary">
                                <i class="fa-solid fa-dumbbell"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-md-3">
                            <h3 class="fs-19 fw-semibold mb-1"><a href="listings-map-grid-1.html">Gymnasiums</a></h3>
                            <p class="mb-0 small">21+ listings</p>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold gap-2 link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- end /. category -->
                </div>
            </div>
        </div>
    </div>
    <!-- end /. categories -->
    <!-- start process -->
    <div class="py-5 border-top position-relative overflow-hidden">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Best Way</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Find Your Dream Place The Best Way</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="bg-no-repeat numbers-wrapper">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="mx-xl-4 number-wrap text-center" data-aos="fade" data-aos-delay="300">
                            <div class="align-items-center bg-primary d-flex font-caveat fs-1 justify-content-center mb-4 mx-auto number-circle rounded-circle text-white">1</div>
                            <h4>Input your location to start looking for landmarks.</h4>
                            <p class="fs-15 m-0 opacity-75">orem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra vitae quam integer semper.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mx-xl-4 number-wrap text-center second" data-aos="fade" data-aos-delay="400">
                            <div class="align-items-center bg-primary d-flex font-caveat fs-1 justify-content-center mb-4 mx-auto number-circle rounded-circle text-white">2</div>
                            <h4>Make an appointment at the place you want to visit.</h4>
                            <p class="fs-15 m-0 opacity-75">orem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra vitae quam integer.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mx-xl-4 number-wrap text-center" data-aos="fade" data-aos-delay="500">
                            <div class="align-items-center bg-primary d-flex font-caveat fs-1 justify-content-center mb-4 mx-auto number-circle rounded-circle text-white">3</div>
                            <h4>Visit the place and enjoy the experience.</h4>
                            <p class="fs-15 m-0 opacity-75">orem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra vitae quam integer aenean.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end /. process -->
    <!-- start explore cities & about -->
    <div class="py-5 bg-primary position-relative overflow-hidden text-white bg-primary bg-size-contain home-about js-bg-image" data-image-src="assets/images/lines.svg">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                        <!-- start section header -->
                        <div class="section-header text-center mb-5" data-aos="fade-down">
                            <!-- start subtitle -->
                            <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize">Top Regions</div>
                            <!-- end /. subtitle -->
                            <!-- start title -->
                            <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Explore Cities</h2>
                            <!-- end /. title -->
                            <!-- start description -->
                            <div class="sub-title fs-16">Discover exciting categories. <span class="fw-semibold">Find what you’re looking for.</span></div>
                            <!-- end /. description -->
                        </div>
                        <!-- end /. section header -->
                    </div>
                </div>
            </div>
            <!-- start place carousel -->
            <div class="owl-carousel owl-theme place-carousel owl-nav-center" data-aos="fade-left">
                <!-- start region card -->
                <div class="region-card rounded-4 overflow-hidden position-relative text-white">
                    <div class="region-card-image">
                        <img src="assets/images/locations/01.jpg" alt="Image" class="h-100 object-fit-cover w-100">
                    </div>
                    <div class="region-card-content d-flex flex-column h-100 position-absolute start-0 top-0 w-100">
                        <div class="region-card-info">
                            <h4 class="font-caveat mb-0">Jamaica</h4>
                            <h3 class="h2">Kingston</h3>
                            <span>100+ listings</span>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold justify-content-between mt-auto region-card-link">
                            <div class="fs-12 region-card-link-text text-uppercase text-white">Explore more</div>
                            <div class="align-items-center bg-blur text-white btn-icon-md d-flex end-0 justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end /. region card -->
                <!-- start region card -->
                <div class="region-card rounded-4 overflow-hidden position-relative text-white">
                    <div class="region-card-image">
                        <img src="assets/images/locations/02.jpg" alt="Image" class="h-100 object-fit-cover w-100">
                    </div>
                    <div class="region-card-content d-flex flex-column h-100 position-absolute start-0 top-0 w-100">
                        <div class="region-card-info">
                            <h4 class="font-caveat mb-0">Jordan</h4>
                            <h3 class="h2">Amman</h3>
                            <span>59+ listings</span>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold justify-content-between mt-auto region-card-link">
                            <div class="fs-12 region-card-link-text text-uppercase text-white">Explore more</div>
                            <div class="align-items-center bg-blur text-white btn-icon-md d-flex end-0 justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end /. region card -->
                <!-- start region card -->
                <div class="region-card rounded-4 overflow-hidden position-relative text-white">
                    <div class="region-card-image">
                        <img src="assets/images/locations/03.jpg" alt="Image" class="h-100 object-fit-cover w-100">
                    </div>
                    <div class="region-card-content d-flex flex-column h-100 position-absolute start-0 top-0 w-100">
                        <div class="region-card-info">
                            <h4 class="font-caveat mb-0">Brazil</h4>
                            <h3 class="h2">Atlanta</h3>
                            <span>89+ listings</span>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold justify-content-between mt-auto region-card-link">
                            <div class="fs-12 region-card-link-text text-uppercase text-white">Explore more</div>
                            <div class="align-items-center bg-blur text-white btn-icon-md d-flex end-0 justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end /. region card -->
                <!-- start region card -->
                <div class="region-card rounded-4 overflow-hidden position-relative text-white">
                    <div class="region-card-image">
                        <img src="assets/images/locations/04.jpg" alt="Image" class="h-100 object-fit-cover w-100">
                    </div>
                    <div class="region-card-content d-flex flex-column h-100 position-absolute start-0 top-0 w-100">
                        <div class="region-card-info">
                            <h4 class="font-caveat mb-0">Italy</h4>
                            <h3 class="h2">Vanish City</h3>
                            <span>65+ listings</span>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold justify-content-between mt-auto region-card-link">
                            <div class="fs-12 region-card-link-text text-uppercase text-white">Explore more</div>
                            <div class="align-items-center bg-blur text-white btn-icon-md d-flex end-0 justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end /. region card -->
                <!-- start region card -->
                <div class="region-card rounded-4 overflow-hidden position-relative text-white">
                    <div class="region-card-image">
                        <img src="assets/images/locations/05.jpg" alt="Image" class="h-100 object-fit-cover w-100">
                    </div>
                    <div class="region-card-content d-flex flex-column h-100 position-absolute start-0 top-0 w-100">
                        <div class="region-card-info">
                            <h4 class="font-caveat mb-0">Italy</h4>
                            <h3 class="h2">Vanish City</h3>
                            <span>65+ listings</span>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold justify-content-between mt-auto region-card-link">
                            <div class="fs-12 region-card-link-text text-uppercase text-white">Explore more</div>
                            <div class="align-items-center bg-blur text-white btn-icon-md d-flex end-0 justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end /. region card -->
                <!-- start region card -->
                <div class="region-card rounded-4 overflow-hidden position-relative text-white">
                    <div class="region-card-image">
                        <img src="assets/images/locations/06.jpg" alt="Image" class="h-100 object-fit-cover w-100">
                    </div>
                    <div class="region-card-content d-flex flex-column h-100 position-absolute start-0 top-0 w-100">
                        <div class="region-card-info">
                            <h4 class="font-caveat mb-0">Italy</h4>
                            <h3 class="h2">Vanish City</h3>
                            <span>65+ listings</span>
                        </div>
                        <a href="listings-map-grid-1.html" class="align-items-center d-flex fw-semibold justify-content-between mt-auto region-card-link">
                            <div class="fs-12 region-card-link-text text-uppercase text-white">Explore more</div>
                            <div class="align-items-center bg-blur text-white btn-icon-md d-flex end-0 justify-content-center rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end /. region card -->
            </div>
            <!-- end /. place carousel -->
            <div class="row g-4 mt-5" data-aos="fade-up">
                <div class="col-md-6">
                    <h2 class="display-4 mb-5">Find your perfect Place based on <span class="font-caveat">your interest</span></h2>
                    <img src="assets/images/about-2.jpg" alt="" class="home-about-image w-100 rounded-4 object-fit-cover">
                </div>
                <div class="col-md-6 ps-xxl-5">
                    <p class="lead mb-4">Want to have a fantastic travel experience? Let us connect you with diverse categories of businesses, public spots, and famous landmarks so that you can create unforgettable memories.</p>
                    <ul class="d-flex flex-column gap-4 lead mb-4">
                        <li>Find popular businesses and important<br> sites near you.</li>
                        <li>Get place recommendations <br>based on your preferences.</li>
                        <li>Explore major spots and landmarks around<br> your location.</li>
                        <li>Discover diverse categories to <br>navigate various areas.</li>
                    </ul>
                    <a href="contact.html" class="btn btn-light mt-4">Get Started Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end /. explore cities & about -->
    <!-- start places list items -->
    <div class="py-5 overflow-hidden position-relative">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-4 sidebar">
                    <!-- start section header -->
                    <div class="section-header mb-5 text-center text-lg-start" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Places</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Discover Your Favourite Place</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Our publications can provide quality and useful tips and advice for companies on how to evaluate SaaS providers and choose the best one for their needs, taking into account factors such as price, features and support.</div>
                        <!-- end /. description -->
                        <!-- start button -->
                        <div><a href="blog.html" class="btn btn-primary mt-3">View All Places</a></div>
                        <!-- end /. button -->
                        <svg class="text-primary mt-4 d-none d-lg-block" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <!-- end /. section header -->
                </div>
                <div class="col-lg-8 content ps-xxl-5">
                    <!-- start card list -->
                    <div class="card overflow-hidden rounded-4 border-0 bg-light mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-6 col-xl-5 position-relative">
                                    <div class="card-image-hover overflow-hidden position-relative h-100">
                                        <!-- start image -->
                                        <img src="assets/images/place/01.jpg" alt="" class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white"><i class="fa-solid fa-star me-1"></i>Featured</div>
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">$100 off $399: eblwc</div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-xl-7 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                                </svg>
                                            </a>
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-star"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h3 class="fs-5 fw-semibold mb-0">Green Mart Apartment<i class="fa-solid fa-circle-check fs-6 ms-1 text-success"></i></h3>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3">Amet minim mollit non deserunt ullamco est sit aliqua dolor.</p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#9b9b9b" class="bi bi-telephone" viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                                <span>(123) 456-7890</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a>
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. card list -->
                    <!-- start card list -->
                    <div class="card overflow-hidden rounded-4 border-0 bg-light mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-6 col-xl-5 position-relative">
                                    <div class="card-image-hover overflow-hidden position-relative h-100">
                                        <!-- start image -->
                                        <img src="assets/images/place/02.jpg" alt="" class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">10% OFF</div>
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">$100 off $399: eblwc</div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-xl-7 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                                </svg>
                                            </a>
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-star"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h3 class="fs-5 fw-semibold mb-0">Chuijhal Hotel And Restaurant</h3>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3">Amet minim mollit non deserunt ullamco est sit aliqua dolor.</p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#9b9b9b" class="bi bi-telephone" viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                                <span>(123) 456-7890</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a>
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. card list -->
                    <!-- start card list -->
                    <div class="card overflow-hidden rounded-4 border-0 bg-light mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-6 col-xl-5 position-relative">
                                    <div class="card-image-hover overflow-hidden position-relative h-100">
                                        <!-- start image -->
                                        <img src="assets/images/place/03.jpg" alt="" class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">10% OFF</div>
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">$100 off $399: eblwc</div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-xl-7 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                                </svg>
                                            </a>
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-star"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h3 class="fs-5 fw-semibold mb-0">The Barber's Lounge</h3>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3">Amet minim mollit non deserunt ullamco est sit aliqua dolor.</p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#9b9b9b" class="bi bi-telephone" viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                                <span>(123) 456-7890</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a>
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. card list -->
                    <!-- start card list -->
                    <div class="card overflow-hidden rounded-4 border-0 bg-light mb-4 card-hover">
                        <a href="listing-details.html" class="stretched-link"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-6 col-xl-5 position-relative">
                                    <div class="card-image-hover overflow-hidden position-relative h-100">
                                        <!-- start image -->
                                        <img src="assets/images/place/04.jpg" alt="" class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">10% OFF</div>
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">$100 off $399: eblwc</div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-xl-7 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                                </svg>
                                            </a>
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-star"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h3 class="fs-5 fw-semibold mb-0">Gaming Expo Spectacle</h3>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3">Amet minim mollit non deserunt ullamco est sit aliqua dolor.</p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#9b9b9b" class="bi bi-telephone" viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                                <span>(123) 456-7890</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a>
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. card list -->
                    <!-- start card list -->
                    <div class="card overflow-hidden rounded-4 border-0 bg-light card-hover">
                        <a href="listing-details.html" class="stretched-link"></a>
                        <div class="card-body p-0">
                            <div class="g-0 row">
                                <div class="bg-white col-lg-5 col-md-6 col-xl-5 position-relative">
                                    <div class="card-image-hover overflow-hidden position-relative h-100">
                                        <!-- start image -->
                                        <img src="assets/images/place/05.jpg" alt="" class="h-100 w-100 object-fit-cover">
                                        <!-- end /. image -->
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">10% OFF</div>
                                        <div class="bg-primary card-badge d-inline-block fs-12 fw-semibold position-absolute start-0 text-uppercase text-white">$100 off $399: eblwc</div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-xl-7 p-3 p-lg-4 p-md-3 p-sm-4">
                                    <div class="d-flex flex-column h-100">
                                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                                </svg>
                                            </a>
                                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-white rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                            <!-- start ratings -->
                                            <i class="fa-solid fa-star"></i>
                                            <!-- end /. ratings -->
                                            <!-- start rating counter text -->
                                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                                            <!-- end /. rating counter text -->
                                        </div>
                                        <!-- start card title -->
                                        <h3 class="fs-5 fw-semibold mb-0">Fitness Petrol Gym and Health Club</h3>
                                        <!-- end /. card title -->
                                        <!-- start card description -->
                                        <p class="mt-3">Amet minim mollit non deserunt ullamco est sit aliqua dolor.</p>
                                        <!-- end /. card description -->
                                        <!-- start contact content -->
                                        <div class="d-flex flex-wrap gap-3 mt-auto z-1">
                                            <a href="tel:+4733378901" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#9b9b9b" class="bi bi-telephone" viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                                <span>(123) 456-7890</span>
                                            </a>
                                            <a href="#" class="d-flex gap-2 align-items-center fs-13 fw-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9b9b9b" class="bi bi-compass" viewBox="0 0 16 16">
                                                    <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                                </svg>
                                                <span>Directions</span>
                                            </a>
                                        </div>
                                        <!-- end contact content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. card list -->
                </div>
            </div>
        </div>
        <div class="decoration blur-2"></div>
    </div>
    <!-- end /. places list items -->
    <!-- start testimonial -->
    <div class="py-5 dark-overlay position-relative overflow-hidden text-white">
        <img src="assets/images/testimonial-bg-2.jpg" class="bg-image js-image-parallax" alt="">
        <div class="container py-4 overlay-content">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Testimonial</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">See What Our Clients Say About Us</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-10">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <div class="text-center mb-3">
                                <img src="assets/images/quote-white.svg" alt="" class="m-auto w-auto">
                            </div>
                            <div class="fs-3 text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </div>
                            <div class="text-center mt-4 fw-semibold">MARK, SOUTH EVERETT</div>
                        </div>
                        <div class="testimonial-item">
                            <div class="text-center mb-3">
                                <img src="assets/images/quote-white.svg" alt="" class="m-auto w-auto">
                            </div>
                            <div class="fs-3 text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </div>
                            <div class="text-center mt-4 fw-semibold">MARK, SOUTH EVERETT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end /. testimonial -->
    <!-- start blog section -->
    <div class="py-5 position-relative overflow-hidden">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Our Latest Articles</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Discover Our Latest News And Articles</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="blog-carousel owl-carousel owl-theme owl-nav-bottom">
                <!-- start article -->
                <article class="card h-100 overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <a href="blog-details.html" class="h-100 position-absolute start-0 top-0 w-100 z-1" aria-label="Read more"></a>
                        <a href="#" class="align-items-center bg-white btn-icon d-flex end-0 justify-content-center me-3 mt-3 position-absolute rounded-circle text-primary top-0 z-3" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Read later" data-bs-original-title="Read later">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg>
                        </a>
                        <img src="assets/images/blog/01-lg.jpg" class="card-img-top image-zoom-hover" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 mb-3">
                            <span class="fs-sm small text-muted">9 hours ago</span>
                            <span class="opacity-25">|</span>
                            <a class="badge border fw-semibold text-primary bg-white" href="#">Events</a>
                        </div>
                        <h3 class="h5 fw-semibold mb-0 post-title overflow-hidden">
                            <a href="blog-details.html">Etiam Dapibus Metus Aliquam Orci Venenatis, Suscipit Efficitur.</a>
                        </h3>
                    </div>
                    <div class="card-footer py-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="assets/images/avatar/01.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="#" class="d-block"><span class="fst-italic text-muted">By</span> <span class="fw-medium">Ethan Blackwood</span></a>
                                <small class="text-muted">Engineer</small>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end /. article -->
                <!-- start article -->
                <article class="card h-100 overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <a href="blog-details.html" class="h-100 position-absolute start-0 top-0 w-100 z-1" aria-label="Read more"></a>
                        <a href="#" class="align-items-center bg-white btn-icon d-flex end-0 justify-content-center me-3 mt-3 position-absolute rounded-circle text-primary top-0 z-3" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Read later" data-bs-original-title="Read later">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg>
                        </a>
                        <img src="assets/images/blog/02-lg.jpg" class="image-zoom-hover" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 mb-3">
                            <span class="fs-sm small text-muted">August 30, 2023</span>
                            <span class="opacity-25">|</span>
                            <a class="badge border fw-semibold text-primary bg-white" href="#">Events</a>
                        </div>
                        <h3 class="h5 fw-semibold mb-0 post-title overflow-hidden">
                            <a href="blog-details.html">Praesent sit amet augue tincidunt, venenatis risus ut.</a>
                        </h3>
                    </div>
                    <div class="card-footer py-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="assets/images/avatar/02.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="#" class="d-block"><span class="fst-italic text-muted">By</span> <span class="fw-medium">Alexander Kaminski</span></a>
                                <small class="text-muted">Data analysis</small>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end /. article -->
                <!-- start article -->
                <article class="card h-100 overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <a href="blog-details.html" class="h-100 position-absolute start-0 top-0 w-100 z-1" aria-label="Read more"></a>
                        <a href="#" class="align-items-center bg-white btn-icon d-flex end-0 justify-content-center me-3 mt-3 position-absolute rounded-circle text-primary top-0 z-3" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Read later" data-bs-original-title="Read later">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg>
                        </a>
                        <img src="assets/images/blog/03-lg.jpg" class="image-zoom-hover" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 mb-3">
                            <span class="fs-sm small text-muted">Jun 28, 2023</span>
                            <span class="opacity-25">|</span>
                            <a class="badge border fw-semibold text-primary bg-white" href="#">Events</a>
                        </div>
                        <h3 class="h5 fw-semibold mb-0 post-title overflow-hidden">
                            <a href="blog-details.html">Duis volutpat ipsum eget pretium posuere.</a>
                        </h3>
                    </div>
                    <div class="card-footer py-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="assets/images/avatar/03.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="#" class="d-block"><span class="fst-italic text-muted">By</span> <span class="fw-medium">Edwin Martins</span></a>
                                <small class="text-muted">Security Engineer</small>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end /. article -->
                <!-- start article -->
                <article class="card h-100 overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <a href="blog-details.html" class="h-100 position-absolute start-0 top-0 w-100 z-1" aria-label="Read more"></a>
                        <a href="#" class="align-items-center bg-white btn-icon d-flex end-0 justify-content-center me-3 mt-3 position-absolute rounded-circle text-primary top-0 z-3" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Read later" data-bs-original-title="Read later">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg>
                        </a>
                        <img src="assets/images/blog/04-lg.jpg" class="image-zoom-hover" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 mb-3">
                            <span class="fs-sm small text-muted">Jul 28, 2023</span>
                            <span class="opacity-25">|</span>
                            <a class="badge border fw-semibold text-primary bg-white" href="#">Events</a>
                        </div>
                        <h3 class="h5 fw-semibold mb-0 post-title overflow-hidden">
                            <a href="blog-details.html">In ut tellus id nisl convallis bibendum eu nec diam.</a>
                        </h3>
                    </div>
                    <div class="card-footer py-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="assets/images/avatar/04.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="#" class="d-block"><span class="fst-italic text-muted">By</span> <span class="fw-medium">Pranoti Deshpande</span></a>
                                <small class="text-muted">Product Manager</small>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end /. article -->
                <!-- start article -->
                <article class="card h-100 overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <a href="blog-details.html" class="h-100 position-absolute start-0 top-0 w-100 z-1" aria-label="Read more"></a>
                        <a href="#" class="align-items-center bg-white btn-icon d-flex end-0 justify-content-center me-3 mt-3 position-absolute rounded-circle text-primary top-0 z-3" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Read later" data-bs-original-title="Read later">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg>
                        </a>
                        <img src="assets/images/blog/05-lg.jpg" class="image-zoom-hover" alt="Image">
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 mb-3">
                            <span class="fs-sm small text-muted">Oct 24, 2023</span>
                            <span class="opacity-25">|</span>
                            <a class="badge border fw-semibold text-primary bg-white" href="#">Events</a>
                        </div>
                        <h3 class="h5 fw-semibold mb-0 post-title overflow-hidden">
                            <a href="blog-details.html">Vestibulum scelerisque urna ut velit auctor varius.</a>
                        </h3>
                    </div>
                    <div class="card-footer py-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="assets/images/avatar/05.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="#" class="d-block"><span class="fst-italic text-muted">By</span> <span class="fw-medium">Gabriel North</span></a>
                                <small class="text-muted">DevOps</small>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end /. article -->
            </div>
        </div>
    </div>
    <!-- end /. blog section -->
    