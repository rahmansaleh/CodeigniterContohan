<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ANJUNGAN MANDIRI RSUDTA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url(); ?>assets/img/logos-whitebackground.png" type="image/x-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Boostrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/plugins/select2/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/adminlte/dist/css/adminlte.min.css">
  
  <style>
    textarea {
        text-transform: uppercase;
    }
    input[type="text"] {
        text-transform: uppercase;
    }
    input[type="email"] {
        text-transform: uppercase;
    }
  </style>
</head>
<?php 
$this->load->view($view_body);
$this->load->view($js);
?>
</html>
<?php
// default SWAL function
if($this->session->flashdata('FlashdataSuccess')) {
    ?>
    <script type="text/javascript">
    swal({
        title: '<?php echo $this->session->flashdata('FlashdataSuccess')[0] ?>',
        text: '<?php echo $this->session->flashdata('FlashdataSuccess')[1] ?>',
        icon: 'success'
    });
    </script>
    <?php
} else if($this->session->flashdata('FlashdataWarning')) {
    ?>
    <script type="text/javascript">
    swal({
        title: '<?php echo $this->session->flashdata('FlashdataWarning')[0] ?>',
        text: '<?php echo $this->session->flashdata('FlashdataWarning')[1] ?>',
        icon: "warning"
    });
    </script>
    <?php
} else if($this->session->flashdata('FlashdataInfo')) {
    ?>
    <script type="text/javascript">
    swal({
        title: '<?php echo $this->session->flashdata('FlashdataInfo')[0] ?>',
        text: '<?php echo $this->session->flashdata('FlashdataInfo')[1] ?>',
        icon: "info"
    });
    </script>
    <?php
} else if($this->session->flashdata('FlashdataError')) {
    ?>
    <script type="text/javascript">
    swal({
        title: '<?php echo $this->session->flashdata('FlashdataError')[0] ?>',
        text: '<?php echo $this->session->flashdata('FlashdataError')[1] ?>',
        icon: "error"
    });
    </script>
    <?php
}
?>