<body class="hold-transition" style="background-color: white;">
<section aria-checked="content">
    <div class="container-fluid">

        <br>
        <div class="row align-items-center">
            <div class="col-md-4 text-right">
                <img style="" src="<?php echo base_url(); ?>assets/img/logos-whitebackground.png" width="90px">
            </div>
            <div class="col-md-4" style="text-align: center;">
                <h5 class="display-4">ANJUNGAN MANDIRI</h1>
                <h5 class="display-5">RSUD Tanah Abang</h1>
            </div>
            <div class="col-md-4">
                <img style="" src="<?php echo base_url(); ?>assets/img/pemprov_logo.png" width="86px">
            </div>
        </div>

        <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                
                <div class="step" data-target="#biodata_pasien">
                    <button type="button" class="step-trigger" role="tab" aria-controls="biodata_pasien" id="biodata_pasien-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Pasien</span>
                    </button>
                </div>

                <div class="line"></div>

                <div class="step" data-target="#biodata_pendamping">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="biodata_pendamping-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Data Pendamping</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">

                <div id="biodata_pasien" class="content" role="tabpanel" aria-labelledby="biodata_pasien-trigger"></div>
                <div id="biodata_pendamping" class="content" role="tabpanel" aria-labelledby="biodata_pendampingan-trigger"></div>

            </div>
        </div>
    </div>
</section>
<?php $this->load->view('partials/js_import.php'); ?>
</body>