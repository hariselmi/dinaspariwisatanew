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

                <?php
                foreach ($q_category as $key => $value) { ?>
                
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
                    <div class="border-0 card card-hover company-card flex-fill rounded-3 w-100">
                        <!-- start card link -->
                        <a href="<?=base_url()?>form/<?=$value->tabel_formulir?>" class="stretched-link"></a>
                        <!-- end /. card link -->
                        <div class="card-body d-flex flex-column">
                            <div class="text-end mb-4 text-primary">
                                <!-- Start Image -->
                                <i class="fa-solid fa-paperclip fs-2"></i>
                                <!-- /. End Image -->
                            </div>
                            <div class="mt-auto">
                                <!-- Start Title -->
                                <h5 class="mb-2"><?=$value->nama?></h5>
                                <!-- End Title -->
                                <!-- start link -->
                                <div class="small mt-2 d-flex align-items-center gap-2 fw-medium text-primary">
                                    <span>Fill Now</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square fs-12"></i>
                                </div>
                                <!-- end /. link -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php    
                }
                ?>

                
            </div>
        </div>
    </div>
    <!-- end /. categories section -->
    