<!-- start footer -->

    <!-- end /. footer -->
    <!-- Optional JavaScript -->
    <script src="<?=base_url()?>assets/plugins/jQuery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/aos/aos.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/macy/macy.js"></script>
    <script src="<?=base_url()?>assets/plugins/simple-parallax/simpleParallax.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/OwlCarousel2/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/theia-sticky-sidebar/ResizeSensor.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-fancyfileuploader/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="<?=base_url()?>assets/plugins/ion.rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/select2/select2.min.js"></script>
    <!-- Custom script for this template -->
    <script src="<?=base_url()?>assets/js/script.js"></script>
</body>


<script type="text/javascript">
    $('#sign-in').on("click", function() {
        login();
    });
    $("#form-signin").keypress(function(event) {
        if (event.which == 13) {
            login();
        }
    });

    function login() {
        $('#sign-in').html("Authenticating...").attr('disabled', true);
        var data = $('#form-signin').serialize();
        $.post("<?php echo base_url() . 'auth/login_attempt'; ?>", data).done(function(data) {
            if (data.status == "success") {
                window.location.replace("<?php echo base_url(); ?>dashboard");
            } else {
                $('#sign-in').html("Login").attr('disabled', false);
                $('.validation-message').html('');
                $('.validation-message').each(function() {
                    for (var key in data) {
                        if ($(this).attr('data-field') == key) {
                            $(this).html(data[key]);
                        }
                    }
                });
            }
        });
    }
</script>

</html>

