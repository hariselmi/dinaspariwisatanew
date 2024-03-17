<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">
    <title>siParBud - Sistem Informasi Pariwisata dan Kebudayaan</title>
    <link href="<?=base_url()?>assets/plugins/aos/aos.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/OwlCarousel2/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/OwlCarousel2/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/ion.rangeSlider/ion.rangeSlider.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/select2-bootstrap-5/select2-bootstrap-5-theme.min.css" rel="stylesheet">
    <!-- Custom style for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand m-0" href="<?=base_url()?>">
                <img class="logo-white" src="<?=base_url()?>assets/images/logo-white.png" alt="">
                <img class="logo-dark" src="<?=base_url()?>assets/images/logo.png" alt="">
            </a>
            <div class="d-flex order-lg-2">
                <!-- start button -->
                <!-- end /. button -->
                <!-- start button -->
                <a href="<?=base_url()?>auth" class="d-flex align-items-center justify-content-center p-0 btn-user" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Sign In">
                    <i class="fa-solid fa-user-plus"></i>
                </a>
                <!-- end /. button -->
                <!-- start button -->
                <button type="button" id="themeToggleBtn" class="align-items-center bg-transparent border-0 btn-user d-flex justify-content-center p-0">
                    <i class="fa-solid fa-moon"></i>
                </button>
                <!-- end /. button -->
                <!-- start button -->

                <a href="#" class="btn btn-primary d-none d-sm-flex fw-medium gap-2 hstack rounded-5">
                    <i class="fa-solid fa-flag"></i>
                    <div class="vr d-none d-sm-inline-block"></div>
                    <span class="d-none d-sm-inline-block"> 
                        <span onclick="change_language(1)"> English </span>| 
                        <span onclick="change_language(2)"> Bahasa </span>| 
                        <span onclick="change_language(3)"> Korean </span> </span>
                </a>
                <!-- end /. button -->
                <!-- start navbar toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="nav-icon" class="">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <!-- end /. navbar toggle button -->
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url()?>"><?=$this->lang->line('menu_1')?></a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>home/category"><?=$this->lang->line('menu_2')?></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>home/maps"><?=$this->lang->line('menu_3')?></a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>home/contact"><?=$this->lang->line('menu_4')?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>form"><?=$this->lang->line('menu_5')?></a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!-- end /. navbar -->
