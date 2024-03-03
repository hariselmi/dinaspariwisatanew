        <div class="border-0 card header rounded-0 sticky-top" style="top:80px;">
        <!-- start header search bar  -->
        <div class="border-bottom border-top p-3 p-xl-0 search-bar">
            <div class="row g-3 g-xl-0">
                <!-- search bar title -->
                <div class="col-12 d-xl-none">
                    <div class="collapse show" id="CollapseText">
                        <h2 class="fw-semibold text-center search-bar-title mb-0">Find what<br> you <span class="font-caveat text-primary">want</span></h2>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 col-xl-6">
                    <div class="search-select-input has-icon has-icon-y position-relative">
                        <!-- input -->
                        <input class="form-control" type="text" placeholder="What are you looking for?">
                        <!-- icon -->
                        <svg class="form-icon-start position-absolute top-50 bi bi-pin-map-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                        <!-- icon -->
                        <svg class="form-icon-end position-absolute top-50 bi bi-crosshair" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9b9b9b" viewBox="0 0 16 16">
                            <path d="M8.5.5a.5.5 0 0 0-1 0v.518A7.001 7.001 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7.001 7.001 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7.001 7.001 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7.001 7.001 0 0 0 8.5 1.018V.5Zm-6.48 7A6.001 6.001 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6.001 6.001 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6.002 6.002 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6.001 6.001 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1h-.48ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                        </svg>
                        <!-- select -->
                        <select class="input-select position-absolute top-50">
                            <option selected>0.5 km</option>
                            <option value="1">1 km</option>
                            <option value="2">5 km</option>
                            <option value="3">10 km</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3 d-none d-lg-block">
                    <!-- Start Search Select -->
                    <div class="search-select has-icon position-relative">
                        <select class="select2 form-select" aria-label="Default select example">
                            
                            <?php 
                            foreach ($q_location as $key => $value) { ?>
                                <option value="<?=$value->id?>"><?=$value->nama?></option>
                            <?php }
                            ?>
                          
                        </select>
                        <svg class="form-icon-start position-absolute top-50 search-icon z-1 bi bi-geo-alt" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </div>
                    <!-- /.End Search Select -->
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3 d-none d-lg-block">
                    <!-- Start Search Select -->
                    <div class="search-select has-icon position-relative">
                        <select class="select2 form-select" aria-label="Default select example">

                            <?php 
                            foreach ($q_category as $key => $value) { ?>
                                <option value="<?=$value->id?>"><?=$value->nama?></option>
                            <?php }
                            ?>

                        </select>
                        <!-- <i class="fa-solid fa-sack-dollar fs-18 search-icon"></i> -->
                        <svg class="form-icon-start position-absolute top-50 search-icon z-1 bi bi-app-indicator" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                    </div>
                    <!-- /.End Search Select -->
                </div>
                <div class="col-lg-3 col-md-4 col-mg-3 d-xl-none gap-3 gap-md-2 hstack justify-content-center">
                    <a href="#" class="sidebarCollapse align-items-center d-flex justify-content-center filters-text fw-semibold gap-2">
                        <i class="fa-solid fa-arrow-up-short-wide fs-18"></i>
                        <span>All filters</span>
                    </a>
                    <div class="h-75 mt-auto vr d-md-none"></div>
                    <a href="#" id="mapCollapse" class="align-items-center d-flex justify-content-center filters-text fw-semibold gap-2">
                        <i class="fa-solid fa-map-location-dot fs-18"></i>
                        <span>Map</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end /. header search bar  -->
    </div>
    <!-- end /. header -->
    <div class="map-wrapper">
        <!-- start sidebar filters -->
        <div class="sidebar-filters js-sidebar-filters-mobile">
            <!-- filter header -->
            <div class="border-bottom d-flex justify-content-between align-items-center p-3 sidebar-filters-header d-xl-none">
                <div class="align-items-center btn-icon d-flex filter-close justify-content-center rounded-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </div>
                <span class="fs-3 fw-semibold">Filters</span>
                <span class="text-primary fw-medium">Clear</span>
            </div>
            <!-- end /. filter header -->
            <div class="sidebar-filters-body p-3 p-xl-4">
                <div class="mb-4 border-bottom pb-4">
                    <div class="mb-3">
                        <h4 class="fs-5 fw-semibold mb-1">Price Filter</h4>
                        <p class="mb-0 small">Select min and max price range</p>
                    </div>
                    <!-- Start Range Slider -->
                    <div class="js-range-slider"></div>
                    <!-- End Range Slider -->
                </div>
                <div class="mb-4 border-bottom pb-4">
                    <div class="mb-3">
                        <h4 class="fs-5 fw-semibold mb-2">Categories</h4>
                        <p class="mb-0 small">Duis a leo sit amet odio volutpat auctor ut a lorem.</p>
                    </div>

                    <?php 
                    foreach ($q_category as $key => $value) { 
                        $count = $this->db->query("SELECT COUNT(nama) AS Jumlah FROM destination WHERE kategori_id = $value->id")->row()->Jumlah;
                        $check  = $this->db->query("SELECT id FROM filter_kategori WHERE kategori_id = $value->id")->num_rows();
                        $checked = ($check > 0)?'checked':'';
                        ?>

                        <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value=" <?=$value->id?>" <?=$checked?> onclick="insert_kategori(<?=$value->id?>)">
                        <label class="form-check-label" for="skillsOne"><?=$value->nama?><span  class="count fs-13 ms-1 text-muted">(<?=$count?>)</span></label></div>

                    <?php }
                    ?> 

                </div>
                <div class="mb-4 border-bottom pb-4">
                    <div class="mb-3">
                        <h4 class="fs-5 fw-semibold mb-1">Order by</h4>
                        <p class="mb-0 small">Duis a leo sit amet odio volutpat auctor ut a lorem.</p>
                    </div>
                    <!-- Start Select2 -->
                    <select class="form-select">
                        <option value="1">Latest</option>
                        <option value="2">Nearby</option>
                        <option value="3">Top rated</option>
                        <option value="4">Random</option>
                        <option value="5">A-Z</option>
                    </select>
                    <!-- /.End Select2 -->
                </div>
                <!-- start apply button -->
                <button type="button" class="btn btn-primary w-100">Apply filters</button>
                <!-- end /. apply button -->
                <!-- start clear filters -->
                <a href="#" class="align-items-center d-flex fw-medium gap-2 justify-content-center mt-2 small text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                    </svg>
                    Clear filters
                </a>
                <!-- end /. clear filters -->
            </div>
        </div>
        <!-- end /. sidebar filters -->
        <!-- start items content -->
        <div class="items-content bg-light d-flex flex-column py-3 p-xl-4">
            <div class="d-flex flex-wrap align-items-center mb-3 gap-2">
                <div class="col fs-18 text-nowrap">All <span class="fw-bold text-dark">9,069</span> listing found</div>
                <!-- start button group -->
                <div class="border-0 card d-inline-flex flex-row flex-wrap gap-1 p-1 rounded-3 shadow-sm">
                    <a href="listings-map-grid-1.html" class="btn btn-light btn-sm px-2 py-1"><i class="fa-solid fa-border-all"></i></a>
                    <a href="listings-map.html" class="btn btn-light btn-sm px-2 py-1"><i class="fa-solid fa-list"></i></a>
                </div>
                <!-- end /. button group -->
            </div>
            <div class="row g-4 mb-5">

                <?php foreach ($q_maps as $key => $value) { ?>

                <div class="col-sm-6 col-lg-4 col-xl-12 col-xxl-6 d-flex">
                    <!-- start listing card -->
                    <div class="card rounded-3 border-0 shadow-sm w-100 flex-fill overflow-hidden card-hover flex-fill w-100 card-hover-bg">
                        <!-- start card link -->
                        <a href="listings-map.html" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <!-- start card image wrap -->
                        <div class="card-img-wrap card-image-hover overflow-hidden dark-overlay">
                            <img src="assets/images/place/01.jpg" alt="" class="img-fluid">
                            <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2"><i class="fa-solid fa-star"></i> Featured</div>
                            <div class="bg-blur card-badge d-inline-block position-absolute start-0 text-white z-2"><i class="fa-solid fa-tag"></i> $12.00 - $40.00</div>
                            <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                <a href="" class="align-items-center bg-blur btn-icon d-flex justify-content-center rounded-circle shadow-sm text-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- end /. card image wrap -->
                        <div class="d-flex flex-column h-100 position-relative p-3">
                            <div class="align-items-center bg-primary cat-icon d-flex justify-content-center position-absolute rounded-circle text-white"><i class="fa-solid fa-shop"></i></div>
                            <div class="align-items-center d-flex flex-wrap gap-1 text-primary card-start mb-1">
                                <!-- start ratings -->
                                <i class="fa-solid fa-star"></i>
                                <!-- end /. ratings -->
                                <!-- start ratings counter text -->
                                <span class="fw-medium text-primary"><span class="fs-6 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                                <!-- end /. ratings counter text -->
                            </div>
                            <!-- start card title -->
                            <h4 class="fs-18 fw-semibold mb-0">
                                <?=$value->nama_lokasi?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg>
                            </h4>
                            <!-- end /. card title -->
                            <!-- start contact content -->
                            <div class="d-flex flex-wrap gap-3 mt-2 z-1">
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
                    <!-- end /. listing card -->
                </div>

                <?php } ?>

            </div>
            <!-- start pagination -->
            <nav class="justify-content-center mt-auto pagination align-items-center">
                <a class="prev page-numbers" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                    previous
                </a>
                <span class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="next page-numbers" href="#">
                    next
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                </a>
            </nav>
            <!-- end /. pagination -->
        </div>
        <!-- end /. items content -->
        <!-- start map content -->
        <div class="map-content">
            <button type="button" class="sidebarCollapse collapseText btn btn-primary ms-4 mt-4 position-absolute start-0 top-0 align-items-center gap-2 hstack filters-text gap-1 d-none d-xl-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-sort-alpha-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"></path>
                    <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z"></path>
                </svg>
                <span>Hide filters</span>
            </button>
            <div class="d-flex inner-wrap--top p-3 position-absolute start-0 top-0 w-100 d-xl-none">
                <!-- map close icon -->
                <div class="align-items-center d-flex flex-shrink-0 justify-content-center map-close-icon rounded-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </div>
                <!-- map search input -->
                <div class="search-select-input has-icon has-icon-y position-relative flex-grow-1 ms-2">
                    <!-- input -->
                    <input class="form-control" type="text" placeholder="What are you looking for?">
                    <!-- icon -->
                    <svg class="form-icon-start position-absolute top-50 bi bi-pin-map-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                    </svg>
                    <!-- icon -->
                    <svg class="form-icon-end position-absolute top-50 bi bi-crosshair" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9b9b9b" viewBox="0 0 16 16">
                        <path d="M8.5.5a.5.5 0 0 0-1 0v.518A7.001 7.001 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7.001 7.001 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7.001 7.001 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7.001 7.001 0 0 0 8.5 1.018V.5Zm-6.48 7A6.001 6.001 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6.001 6.001 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6.002 6.002 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6.001 6.001 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1h-.48ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                    </svg>
                    <!-- select -->
                    <select class="input-select position-absolute top-50">
                        <option selected>0.5 km</option>
                        <option value="1">1 km</option>
                        <option value="2">5 km</option>
                        <option value="3">10 km</option>
                    </select>
                </div>
            </div>
            <!-- filter button -->
            <div class="all-filters-wrap bottom-0 mb-5 position-absolute start-0 text-center w-100 d-xl-none">
                <div class="align-items-center all-filters d-inline-flex fw-semibold gap-2 justify-content-center px-4 py-3 rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-sort-alpha-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"></path>
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z"></path>
                    </svg>
                    <span>All filters</span>
                </div>
            </div>
            <!-- start map -->
            <div id="mapCanvasTwo" class="map-grid map-full shadow-left"></div>
            <!-- end /. map -->
        </div>
        <!-- end /. map content -->
    </div>
   