<footer class="footer-content">
                <div class="align-items-center d-flex footer-text gap-3 justify-content-between">
                    <div class="copy">© 2024 siParBud - All Rights Reserved</div>
                    <div class="credit">Developed by: <a href="#">Dinas Pariwisata dan Kebudayaan</a></div>
                </div>
            </footer>
            <!--/.footer content-->
            <div class="overlay"></div>
        </div>
        <!--/.wrapper-->
    </div>
    <!-- Global script(used by all pages) -->
    <script src="<?=base_url()?>assets/plugins/jQuery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- Third Party Scripts(used by this page) -->
    <script src="<?=base_url()?>assets/plugins/toastr/toastr.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery.counterup/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Page Scripts(used by all page) -->
    <script src="<?=base_url()?>assets/dist/js/app.min.js"></script>
    <!-- Page Active Scripts(used by this page) -->
    <script src="<?=base_url()?>assets/dist/js/dashboard.js"></script>
    <script>
        /*-------------------------------------------
            Toastr
        --------------------------------------------- */
        setTimeout(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 5000
            };
            toastr.success('Sistem Informasi Pariwisata dan Kebudayaan', 'Welcome to siParBud');
        }, 500);
    </script>
</body>

</html>