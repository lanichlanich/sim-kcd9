<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="text-bold-800 grey darken-2" href="#" target="_blank">Tim SIM KCD9</a></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url(); ?>app-assets/vendors/js/vendors.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url(); ?>app-assets/vendors/js/ui/prism.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="<?php echo base_url(); ?>app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url(); ?>app-assets/js/core/app-menu.js"></script>
<script src="<?php echo base_url(); ?>app-assets/js/core/app.js"></script>
<script src="<?php echo base_url(); ?>app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo base_url(); ?>app-assets/js/scripts/datatables/datatable.js"></script>
<script src="<?php echo base_url(); ?>app-assets/js/scripts/forms/wizard-steps.js"></script>
<!-- END: Page JS-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#sekolah').DataTable({
            responsive: true
        });
    })
</script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


</body>
<!-- END: Body-->

</html>