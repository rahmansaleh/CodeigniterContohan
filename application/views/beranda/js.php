<script type="text/javascript">

    function tipe_pasien_onchange(tipe_pasien) {

        $('#tipe_pasien_cont').css('display', 'none');
        $('#pasien_bpjs_cont').css('display', 'none');
        $('#pasien_umum_cont').css('display', 'none');

        if(tipe_pasien == 'pasien_umum') $('#pasien_umum_cont').css('display', 'block');
        else if(tipe_pasien == 'pasien_bpjs') $('#pasien_bpjs_cont').css('display', 'block');
    }

    function submit_name_printer_thermal(button_id) {

        $(button_id).html('<i class="fa fa-spinner fa-spin fa-1x fa-fw"></i>').prop('disabled', true);
        
        var name_printer_thermal = $('#name_printer_thermal').val();

        $.ajax({
            url: "<?= base_url() ?>beranda/beranda/set_printer_thermal",
            type: "POST",
            data: {
                printer_thermal: name_printer_thermal
            },
            dataType: "JSON",
            complete: function(xhr, status) {
                location.reload();
            }
        });
    }

    $(document).ready(function() {

        var request_printer_thermal = $('#request_printer_thermal').val();

        if(request_printer_thermal) {

            $('#text_modal').modal('show');
        }
    });

 </script>