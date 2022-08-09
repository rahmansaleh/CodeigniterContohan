<body class="hold-transition" style="background-color: white;">
<section aria-checked="content">
    <div class="container-fluid">
        
        <br>
        <div class="row align-items-center">
            <div class="col-md-1">
                <a href="<?= base_url(); ?>">
                    <img style="" src="<?php echo base_url(); ?>assets/img/icon/ic_home.png" height="120px">
                </a>
            </div>
            <div class="col-md-3 text-right">
                <a href="<?= base_url(); ?>">
                    <img style="" src="<?php echo base_url(); ?>assets/img/logos-whitebackground.png" height="150px">
                </a>
            </div>
            <div class="col-md-7" style="text-align: left;">
                <a href="<?= base_url(); ?>" style="color: black;">
                    <h2 class="display-4">ANJUNGAN PASIEN MANDIRI</h1>
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <input type="hidden" id="request_printer_thermal" name="request_printer_thermal" value="<?= $request_printer_thermal; ?>">

        <div id="tipe_pasien_cont">
            <br>
            <div class="card-deck text-center">

                <!-- pasien umum -->
                <div class="card mb-1 shadow-sm bg-warning">
                    <a href="<?php echo base_url(); ?>pendaftaran_pasien_baru/pendaftaran_pasien_baru">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <span style="font-size: 120px; color: white;">
                                    <i class="fas fa-user"></i>
                                </span>
                            </ul>
                            <p style="font-size: 42px;"> DAFTAR PASIEN BARU</p>
                        </div>
                    </a>
                </div>

                <!-- pasien umum -->
                <div class="card mb-1 shadow-sm bg-primary" onclick="tipe_pasien_onchange(`pasien_umum`);">
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <span style="font-size: 120px; color: white;">
                                <i class="fas fa-user"></i>
                            </span>
                        </ul>
                        <p style="font-size: 42px;"> PASIEN UMUM</p>
                    </div>
                </div>

                <!-- pasien bpjs -->
                <div class="card mb-1 shadow-sm bg-success" onclick="tipe_pasien_onchange(`pasien_bpjs`);">
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <span style="font-size: 120px; color: white;">
                                <i class="fas fa-user"></i>
                            </span>
                        </ul>
                        <p style="font-size: 42px;"> PASIEN BPJS</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pasien_umum_cont" style="display: none;">
            <br>
            <div class="card-deck text-center">
                <div class="card mb-1 shadow-sm bg-success">
                    <a href="<?php echo base_url(); ?>umum/booking_poli">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <span style="font-size: 120px; color: white;">
                                    <i class="fas fa-user-md"></i>
                                </span>
                            </ul>
                            <p style="font-size: 42px;"> PENJADWALAN POLIKLINIK</p>
                        </div>
                    </a>
                </div>

                <div class="card mb-1 shadow-sm bg-primary">
                    <a href="<?php echo base_url(); ?>umum/daftar_poli">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <span style="font-size: 120px; color: white;">
                                    <i class="fas fa-user-md"></i>
                                </span>
                            </ul>
                            <p style="font-size: 42px;"> DAFTAR POLIKLINIK</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div id="pasien_bpjs_cont" style="display: none;">
            <br>
            <div class="card-deck text-center">
            
                <div class="card mb-1 shadow-sm bg-warning">
                    <a href="<?php echo base_url(); ?>bpjs/rencana_kontrol/buat">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <span style="font-size: 120px; color: white;">
                                    <i class="fas fa-book"></i>
                                </span>
                            </ul>
                            <p style="font-size: 42px;"> BUAT SURAT RENCANA KONTROL</p>
                        </div>
                    </a>
                </div>

                <div class="card mb-1 shadow-sm bg-success">
                    <a href="<?= base_url(); ?>bpjs/sep">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <span style="font-size: 120px; color: white;">
                                    <i class="fas fa-book"></i>
                                </span>
                            </ul>
                            <p style="font-size: 42px;"> BUAT SURAT SEP</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</section>

<div class="modal fade" id="text_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-form-label">Masukkan Nama Printer Thermal</label>
                    <input type="text" class="form-control" style="text-transform: none;" id="name_printer_thermal" name="name_printer_thermal">
                </div>
                <button type="button" class="btn btn-primary" id="btn_printer_thermal" name="btn_printer_thermal" onclick="submit_name_printer_thermal(`#`+this.id);">Simpan</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/js_import.php'); ?>
</body>