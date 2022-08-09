<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- MOMEN JS -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url() ?>assets/adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/adminlte/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- swal -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

    $(function() {
        $('.select2').select2()

        $('.datetimefunc').datetimepicker({
            format: 'DD-MM-YYYY',
        })
    })
</script>