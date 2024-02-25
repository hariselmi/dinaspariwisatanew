    <!-- start hero header (map) -->
    <div class="align-items-end d-flex hero-header-map position-relative">
        <!-- start map -->
        <div class="h-100 position-absolute start-0 top-0 w-100">
            <div id="mapCanvasTwo" class="h-100 w-100"></div>
        </div>
        <!-- end /. map -->
        <div class="container position-relative z-1">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- start search content -->
                    <div class="border-0 card d-flex flex-md-row position-relative search-wrapper mb-5 shadow">
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
    <!-- end /. hero header (map) -->
<!-- start categories section -->
    <div class="py-5 bg-light rounded-4 mx-3 mt-3">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Categories</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Global Categories</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-utensils fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Restaurant</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-headphones fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Music</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-dumbbell fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Gymnasium</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-building-user fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Appartment</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-bag-shopping fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Shopping</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-tv fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">TV Shows</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-paintbrush fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Creative & Digital</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-shield-virus fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Health & beauty</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-shirt fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Fashion</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-gem fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Jewelry</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-motorcycle fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Cars & Motorcycles</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="listings-map-grid-1.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-puzzle-piece fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2">Video Games & Consoles</h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Explore Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end /. categories section -->
    <!-- start place section -->
    <div class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Places</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Discover places around Germany</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <!-- start card -->
                    <div class="card rounded-4 h-100 overflow-hidden bg-light border-0">
                        <div class="position-relative overflow-hidden dark-overlay h-100">
                            <img src="<?=base_url()?>assets/images/locations/masonry/09.jpg" class="h-100 w-100 object-fit-cover image-zoom-hover" alt="Image">
                        </div>
                        <div class="align-items-center badge bg-white d-flex fs-13 fw-semibold justify-content-center position-absolute rounded-4 text-primary top-0 end-0 mt-3 me-3">21 Listing</div>
                        <div class="card-body py-3">
                            <h4 class="font-caveat text-primary mb-0">germany</h4>
                            <h5 class="mb-0 fw-semibold"><a href="listings-map-grid-1.html" class="stretched-link">Berlin</a></h5>
                        </div>
                    </div>
                    <!-- end/. card -->
                </div>
                <div class="col-md-3">
                    <!-- start card -->
                    <div class="card rounded-4 h-100 overflow-hidden bg-light border-0">
                        <div class="position-relative overflow-hidden dark-overlay h-100">
                            <img src="<?=base_url()?>assets/images/locations/masonry/10.jpg" class="h-100 w-100 object-fit-cover image-zoom-hover" alt="Image">
                        </div>
                        <div class="align-items-center badge bg-white d-flex fs-13 fw-semibold justify-content-center position-absolute rounded-4 text-primary top-0 end-0 mt-3 me-3">69 Listing</div>
                        <div class="card-body py-3">
                            <h4 class="font-caveat text-primary mb-0">germany</h4>
                            <h5 class="mb-0 fw-semibold"><a href="listings-map-grid-1.html" class="stretched-link">Hamburg</a></h5>
                        </div>
                    </div>
                    <!-- end/. card -->
                </div>
                <div class="col-md-3">
                    <div class="row g-4 h-100">
                        <div class="col-12">
                            <!-- start card -->
                            <div class="card rounded-4 h-100 overflow-hidden bg-light border-0">
                                <div class="position-relative overflow-hidden dark-overlay h-100">
                                    <img src="<?=base_url()?>assets/images/locations/masonry/11.jpg" class="h-100 w-100 object-fit-cover image-zoom-hover" alt="Image">
                                </div>
                                <div class="align-items-center badge bg-white d-flex fs-13 fw-semibold justify-content-center position-absolute rounded-4 text-primary top-0 end-0 mt-3 me-3">27 Listing</div>
                                <div class="card-body py-3">
                                    <h4 class="font-caveat text-primary mb-0">germany</h4>
                                    <h5 class="mb-0 fw-semibold"><a href="listings-map-grid-1.html" class="stretched-link">Munich</a></h5>
                                </div>
                            </div>
                            <!-- end/. card -->
                        </div>
                        <div class="col-12">
                            <!-- start card -->
                            <div class="card rounded-4 h-100 overflow-hidden bg-light border-0">
                                <div class="position-relative overflow-hidden dark-overlay h-100">
                                    <img src="<?=base_url()?>assets/images/locations/masonry/12.jpg" class="h-100 w-100 object-fit-cover image-zoom-hover" alt="Image">
                                </div>
                                <div class="align-items-center badge bg-white d-flex fs-13 fw-semibold justify-content-center position-absolute rounded-4 text-primary top-0 end-0 mt-3 me-3">109 Listing</div>
                                <div class="card-body py-3">
                                    <h4 class="font-caveat text-primary mb-0">germany</h4>
                                    <h5 class="mb-0 fw-semibold"><a href="listings-map-grid-1.html" class="stretched-link">Bremen</a></h5>
                                </div>
                            </div>
                            <!-- end/. card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end /. place section -->
    <!-- start listings carousel -->
    <div class="py-5 position-relative overflow-hidden border-top">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Places</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Discover your favourite place</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="listings-carousel owl-carousel owl-theme owl-nav-bottom">
                <!-- start listing card -->
                <div class="card rounded-3 w-100 flex-fill overflow-hidden">
                    <!-- start card link -->
                    <a href="listings-map.html" class="stretched-link"></a>
                    <!-- end /. card link -->
                    <!-- start card image wrap -->
                    <div class="card-img-wrap card-image-hover overflow-hidden">
                        <img src="<?=base_url()?>assets/images/place/01.jpg" alt="" class="img-fluid">
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">10% OFF</div>
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">$100 off $399: eblwc</div>
                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                </svg>
                            </a>
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- end /. card image wrap -->
                    <div class="d-flex flex-column h-100 position-relative p-4">
                        <div class="align-items-center bg-primary cat-icon d-flex justify-content-center position-absolute rounded-circle text-white"><i class="fa-solid fa-shop"></i></div>
                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start">
                            <!-- start ratings -->
                            <i class="fa-solid fa-star"></i>
                            <!-- end /. ratings -->
                            <!-- start ratings counter text -->
                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                            <!-- end /. ratings counter text -->
                        </div>
                        <!-- start card title -->
                        <h4 class="fs-5 fw-semibold mb-0">Green Mart Apartment</h4>
                        <!-- end /. card title -->
                    </div>
                </div>
                <!-- end /. listing card -->
                <!-- start listing card -->
                <div class="card rounded-3 w-100 flex-fill overflow-hidden">
                    <!-- start card link -->
                    <a href="listings-map.html" class="stretched-link"></a>
                    <!-- end /. card link -->
                    <!-- start card image wrap -->
                    <div class="card-img-wrap card-image-hover overflow-hidden">
                        <img src="<?=base_url()?>assets/images/place/02.jpg" alt="" class="img-fluid">
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">10% OFF</div>
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">$100 off $399: eblwc</div>
                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                </svg>
                            </a>
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- end /. card image wrap -->
                    <div class="d-flex flex-column h-100 position-relative p-4">
                        <div class="align-items-center bg-primary cat-icon d-flex justify-content-center position-absolute rounded-circle text-white"><i class="fa-solid fa-utensils"></i></div>
                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start">
                            <!-- start ratings -->
                            <i class="fa-solid fa-star"></i>
                            <!-- end /. ratings -->
                            <!-- start ratings counter text -->
                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                            <!-- end /. ratings counter text -->
                        </div>
                        <!-- start card title -->
                        <h4 class="fs-5 fw-semibold mb-0">Chuijhal Hotel And Restaurant</h4>
                        <!-- end /. card title -->
                    </div>
                </div>
                <!-- end /. listing card -->
                <!-- start listing card -->
                <div class="card rounded-3 w-100 flex-fill overflow-hidden">
                    <!-- start card link -->
                    <a href="listings-map.html" class="stretched-link"></a>
                    <!-- end /. card link -->
                    <!-- start card image wrap -->
                    <div class="card-img-wrap card-image-hover overflow-hidden">
                        <img src="<?=base_url()?>assets/images/place/03.jpg" alt="" class="img-fluid">
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">10% OFF</div>
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">$100 off $399: eblwc</div>
                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                </svg>
                            </a>
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- end /. card image wrap -->
                    <div class="d-flex flex-column h-100 position-relative p-4">
                        <div class="align-items-center bg-primary cat-icon d-flex justify-content-center position-absolute rounded-circle text-white"><i class="fa-solid fa-ethernet"></i></div>
                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary card-start">
                            <!-- start ratings -->
                            <i class="fa-solid fa-star"></i>
                            <!-- end /. ratings -->
                            <!-- start ratings counter text -->
                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                            <!-- end /. ratings counter text -->
                        </div>
                        <!-- start card title -->
                        <h4 class="fs-5 fw-semibold mb-0">The Barber's Lounge</h4>
                        <!-- end /. card title -->
                    </div>
                </div>
                <!-- end /. listing card -->
                <!-- start listing card -->
                <div class="card rounded-3 w-100 flex-fill overflow-hidden">
                    <!-- start card link -->
                    <a href="listings-map.html" class="stretched-link"></a>
                    <!-- end /. card link -->
                    <!-- start card image wrap -->
                    <div class="card-img-wrap card-image-hover overflow-hidden">
                        <img src="<?=base_url()?>assets/images/place/04.jpg" alt="" class="img-fluid">
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">10% OFF</div>
                        <div class="bg-primary card-badge d-inline-block text-white position-absolute">$100 off $399: eblwc</div>
                        <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                </svg>
                            </a>
                            <a href="" class="btn-icon shadow-sm d-flex align-items-center justify-content-center text-primary bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Quick View">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- end /. card image wrap -->
                    <div class="d-flex flex-column h-100 position-relative p-4">
                        <div class="align-items-center bg-primary cat-icon d-flex justify-content-center position-absolute rounded-circle text-white"><i class="fa-solid fa-gamepad"></i></div>
                        <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start">
                            <!-- start ratings -->
                            <i class="fa-solid fa-star"></i>
                            <!-- end /. ratings -->
                            <!-- start ratings counter text -->
                            <span class="fw-medium text-primary"><span class="fs-5 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                            <!-- end /. ratings counter text -->
                        </div>
                        <!-- start card title -->
                        <h4 class="fs-5 fw-semibold mb-0">Gaming Expo Spectacle</h4>
                        <!-- end /. card title -->
                    </div>
                </div>
                <!-- end /. listing card -->
            </div>
        </div>
    </div>
    <!-- end /. listings carousel -->
    <!-- start about section -->
    <div class="bg-primary bg-size-contain home-about js-bg-image js-bg-image-lines bg-light mx-3 rounded-4 position-relative pt-5" data-image-src="<?=base_url()?>assets/images/lines.svg">
        <div class="container pt-4">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-7">
                    <!-- start section header -->
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">About us</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Explore over 2.5 million people travel around the world.</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">Discover exciting categories. <span class="text-primary fw-semibold">Find what you’re looking for.</span></div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="column-text-box left">
                        <p><span class="float-start important-text mb-2 me-2 position-relative text-primary fs-50"><strong>M</strong></span>any desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over.</p>
                        <p> It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                        <blockquote class="about-blockquote display-6 font-caveat fst-italic my-3"> It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</blockquote>
                        <p>We hope you enjoy it using it as much as we did building it. Cheers!</p>
                        <img src="<?=base_url()?>assets/images/png-img/signature.png" alt="" class="signature mt-4">
                    </div>
                </div>
                <div class="col-md-6 ps-xxl-5">
                    <!-- start about image masonry -->
                    <div class="ps-xl-4 position-relative">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="about-image-wrap mb-3 rounded-4">
                                    <img src="<?=base_url()?>assets/images/about/01.jpg" alt="" class="h-100 w-100 object-fit-cover about-image-one rounded-3">
                                </div>
                                <div class="about-image-wrap rounded-4">
                                    <img src="<?=base_url()?>assets/images/about/02.jpg" alt="" class="h-100 w-100 object-fit-cover about-image-two rounded-3">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="about-image-wrap mb-3 rounded-4">
                                    <img src="<?=base_url()?>assets/images/about/03.jpg" alt="" class="h-100 w-100 object-fit-cover about-image-three rounded-3">
                                </div>
                                <div class="about-image-wrap rounded-4">
                                    <img src="<?=base_url()?>assets/images/about/04.jpg" alt="" class="h-100 w-100 object-fit-cover about-image-four rounded-3">
                                </div>
                            </div>
                        </div>
                        <img src="<?=base_url()?>assets/images/png-img/about-shape-1.png" alt="About Shape" class="banner-shape-one position-absolute">
                        <img src="<?=base_url()?>assets/images/png-img/about-shape-2.png" alt="About Shape" class="banner-shape-two position-absolute">
                    </div>
                    <!-- end /. about image masonry -->
                </div>
            </div>
        </div>
    </div>
    <!-- end /. about section -->
    <!-- start faq section -->
    <div class="pb-5">
        <div class="container pb-4">
            <div class="home-video mx-3 mx-sm-0">
                <!-- Start About Video Section -->
                <div class="about-video position-relative rounded-4 overflow-hidden">
                    <!-- Image Parallax -->
                    <img src="<?=base_url()?>assets/images/about.jpg" alt="" class="about-img js-image-parallax">
                    <a class="align-items-center bg-blur d-flex justify-content-center popup-youtube position-absolute rounded-circle start-50 text-white top-50 translate-middle video-icon z-1" href="https://www.youtube.com/watch?v=0O2aH4XLbto">
                        <i class="fa-solid fa-play fs-20"></i>
                    </a>
                </div>
                <!-- /. End About Video Section -->
            </div>
            <div class="row mt-5">
                <div class="col-md-4 sidebar">
                    <!-- start section header -->
                    <div class="section-header mb-5 mb-md-0 text-center text-md-start" data-aos="fade-down">
                        <!-- start subtitle -->
                        <div class="d-inline-block font-caveat fs-1 fw-medium section-header__subtitle text-capitalize text-primary">Events</div>
                        <!-- end /. subtitle -->
                        <!-- start title -->
                        <h2 class="display-5 fw-semibold mb-3 section-header__title text-capitalize">Events Near You</h2>
                        <!-- end /. title -->
                        <!-- start description -->
                        <div class="sub-title fs-16">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
                        <!-- end /. description -->
                    </div>
                    <!-- end /. section header -->
                </div>
                <div class="col-md-8 ps-xxl-5 content">
                    <!-- start event card -->
                    <div class="card card-hover mb-4">
                        <div class="card-body">
                            <div class="g-4 row">
                                <div class="col-lg-auto d-flex">
                                    <div class="d-none d-lg-flex">
                                        <div class="bg-primary rounded-circle shape-rounded"></div>
                                        <div class="shape-polygon bg-primary"></div>
                                    </div>
                                    <div class="event-date-wrap">
                                        <div class="font-caveat border d-flex date-icon flex-column justify-content-center mb-3 position-relative rounded-2 text-center text-primary">
                                            <span class="event-calendar-date fs-1 text-primary fw-semibold">27</span>
                                            <div class="event-month">Oct</div>
                                        </div>
                                        <div class="event-time fw-semibold mb-1 fs-15">9.30 - 10.30 AM</div>
                                        <div class="text-uppercase fs-12">Best Portfolio</div>
                                    </div>
                                </div>
                                <div class="col-lg pe-xxl-5">
                                    <h3 class="event-title"><a href="#" class="stretched-link">Digital Awards</a></h3>
                                    <div class="underline position-relative">
                                        <span class="d-block position-absolute start-0 top-50 translate-middle-y w-50"></span>
                                    </div>
                                    <p class="mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                </div>
                                <div class="col-lg-auto align-self-center">
                                    <div class="btn-icon-md bg-primary d-flex align-items-center justify-content-center text-white rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. event card -->
                    <!-- start event card -->
                    <div class="card card-hover mb-4">
                        <div class="card-body">
                            <div class="g-4 row">
                                <div class="col-lg-auto d-flex">
                                    <div class="d-none d-lg-flex">
                                        <div class="bg-primary rounded-circle shape-rounded"></div>
                                        <div class="shape-polygon bg-primary"></div>
                                    </div>
                                    <div class="event-date-wrap">
                                        <div class="font-caveat border d-flex date-icon flex-column justify-content-center mb-3 position-relative rounded-2 text-center text-primary">
                                            <span class="event-calendar-date fs-1 text-primary fw-semibold">19</span>
                                            <div class="event-month">Nov</div>
                                        </div>
                                        <div class="event-time fw-semibold mb-1 fs-15">9.30 - 10.30 AM</div>
                                        <div class="text-uppercase fs-12">Best Portfolio</div>
                                    </div>
                                </div>
                                <div class="col-lg pe-xxl-5">
                                    <h3 class="event-title"><a href="#" class="stretched-link">Aid Fourm Awards</a></h3>
                                    <div class="underline position-relative">
                                        <span class="d-block position-absolute start-0 top-50 translate-middle-y w-50"></span>
                                    </div>
                                    <p class="mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                </div>
                                <div class="col-lg-auto align-self-center">
                                    <div class="btn-icon-md bg-primary d-flex align-items-center justify-content-center text-white rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. event card -->
                    <!-- start event card -->
                    <div class="card card-hover mb-4">
                        <div class="card-body">
                            <div class="g-4 row">
                                <div class="col-lg-auto d-flex">
                                    <div class="d-none d-lg-flex">
                                        <div class="bg-primary rounded-circle shape-rounded"></div>
                                        <div class="shape-polygon bg-primary"></div>
                                    </div>
                                    <div class="event-date-wrap">
                                        <div class="font-caveat border d-flex date-icon flex-column justify-content-center mb-3 position-relative rounded-2 text-center text-primary">
                                            <span class="event-calendar-date fs-1 text-primary fw-semibold">13</span>
                                            <div class="event-month">Dec</div>
                                        </div>
                                        <div class="event-time fw-semibold mb-1 fs-15">9.30 - 10.30 AM</div>
                                        <div class="text-uppercase fs-12">Best Portfolio</div>
                                    </div>
                                </div>
                                <div class="col-lg pe-xxl-5">
                                    <h3 class="event-title"><a href="#" class="stretched-link">Uia Gold Medal</a></h3>
                                    <div class="underline position-relative">
                                        <span class="d-block position-absolute start-0 top-50 translate-middle-y w-50"></span>
                                    </div>
                                    <p class="mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                </div>
                                <div class="col-lg-auto align-self-center">
                                    <div class="btn-icon-md bg-primary d-flex align-items-center justify-content-center text-white rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. event card -->
                    <!-- start event card -->
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="g-4 row">
                                <div class="col-lg-auto d-flex">
                                    <div class="d-none d-lg-flex">
                                        <div class="bg-primary rounded-circle shape-rounded"></div>
                                        <div class="shape-polygon bg-primary"></div>
                                    </div>
                                    <div class="event-date-wrap">
                                        <div class="font-caveat border d-flex date-icon flex-column justify-content-center mb-3 position-relative rounded-2 text-center text-primary">
                                            <span class="event-calendar-date fs-1 text-primary fw-semibold">12</span>
                                            <div class="event-month">Jan</div>
                                        </div>
                                        <div class="event-time fw-semibold mb-1 fs-15">9.30 - 10.30 AM</div>
                                        <div class="text-uppercase fs-12">Digital Awards</div>
                                    </div>
                                </div>
                                <div class="col-lg pe-xxl-5">
                                    <h3 class="event-title"><a href="#" class="stretched-link">Uia Gold Medal</a></h3>
                                    <div class="underline position-relative">
                                        <span class="d-block position-absolute start-0 top-50 translate-middle-y w-50"></span>
                                    </div>
                                    <p class="mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                </div>
                                <div class="col-lg-auto align-self-center">
                                    <div class="btn-icon-md bg-primary d-flex align-items-center justify-content-center text-white rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /. event card -->
                </div>
            </div>
        </div>
    </div>
    <!-- end /. faq section -->
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
                        <img src="<?=base_url()?>assets/images/blog/01-lg.jpg" class="card-img-top image-zoom-hover" alt="Image">
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
                                <img src="<?=base_url()?>assets/images/avatar/01.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
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
                        <img src="<?=base_url()?>assets/images/blog/02-lg.jpg" class="image-zoom-hover" alt="Image">
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
                                <img src="<?=base_url()?>assets/images/avatar/02.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
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
                        <img src="<?=base_url()?>assets/images/blog/03-lg.jpg" class="image-zoom-hover" alt="Image">
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
                                <img src="<?=base_url()?>assets/images/avatar/03.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
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
                        <img src="<?=base_url()?>assets/images/blog/04-lg.jpg" class="image-zoom-hover" alt="Image">
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
                                <img src="<?=base_url()?>assets/images/avatar/04.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
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
                        <img src="<?=base_url()?>assets/images/blog/05-lg.jpg" class="image-zoom-hover" alt="Image">
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
                                <img src="<?=base_url()?>assets/images/avatar/05.jpg" class="rounded-circle" width="48" height="48" alt="Avatar">
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