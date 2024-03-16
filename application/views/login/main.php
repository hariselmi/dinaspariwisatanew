
    <!-- start navbar -->
   <!-- end /. navbar -->
    <div class="p-3 p-sm-5">
        <div class="row g-4 g-xl-5 justify-content-between">
            <div class="col-xl-5 d-flex justify-content-center">
                <div class="authentication-wrap overflow-hidden position-relative text-center text-sm-start my-5">
                    <!-- Start Header Text -->
                    <div class="mb-5">
                        <h2 class="display-6 fw-semibold mb-3">Welcome back!</h2>
                        <h2 class="display-6 fw-semibold mb-3">si <span class="font-caveat text-primary">ParBud</span></h2>
                    </div>
                    <!-- /.End Header Text -->

                    <!-- Start Divider -->
                    <br>
                    <!-- /.End Divider -->
                    <form id="form-signin">
                        <!-- Start Form Group -->
                        <div class="form-group mb-4">
                            <label class="required">Enter Email</label>
                            <input type="email" name="username" class="form-control is-invalid" value="administrator@gmail.com">
                            <div class="validation-message text-start" data-field="username"></div>
                        </div>
                        <!-- /.End Form Group -->
                        <!-- Start Form Group -->
                        <div class="form-group mb-4">
                            <label class="required">Password</label>
                            <input id="password" name="password" type="password" class="form-control password" autocomplete="off" value="11223344">
                            <i data-bs-toggle="#password" class="fa-regular fa-eye-slash toggle-password"></i>
                             <div class="validation-message text-start " data-field="password"></div>
                        </div>
                        <!-- /.End Form Group -->
                        <!-- Start Checkbox -->
                        <div class="form-check mb-4 text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember me next time</label>
                        </div>
                        <!-- /.End Checkbox -->
                        <!-- Start Button -->
                        <button class="btn btn-primary btn-lg w-100" id="sign-in">Sign In</button>
                        <!-- End Button -->
                    </form>
                    <!-- Start Bottom Text -->
                    <div class="bottom-text text-center mt-4"> Don't have an account? <a href="sign-up.html" class="fw-medium text-decoration-underline">Sign In</a>
                        <br> Remind <a href="forgot-password.html" class="fw-medium text-decoration-underline">Password</a>
                    </div>
                    <!-- /.End Bottom Text -->
                </div>
            </div>
            <div class="col-xl-7 d-none d-xl-block">
                <div class="background-image bg-light d-flex flex-column h-100 justify-content-center p-5 rounded-4" data-image-src="<?=base_url()?>assets/images/lines.svg">
                    <div class="py-0 text-center">
                        <div class="mb-5">
                            <h3 class="fw-semibold">Sistem Informasi Pariwisata dan Kebudayaan</h3>
                            <p>Dinas Pariwisata dan Kebudayaan Kota Batam </p>
                        </div>
                        <img src="<?=base_url()?>assets/images/png-img/login.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    