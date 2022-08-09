<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
    }

    public function index() {

        // $printer_thermal = $this->input->cookie('printer_thermal', true);

        $data = array(
            'view_body' => 'beranda/beranda.php',
            'js' => 'beranda/js.php',
            'request_printer_thermal' => false ,
        );
        $this->load->view('view', $data);
    }

    public function set_printer_thermal() {

        $printer_thermal = $this->input->post('printer_thermal');

        $this->input->set_cookie(array(
            'name' => 'printer_thermal',
            'value' => $printer_thermal,
            'expire' => '0',
        ));

        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode(array(
            "status" => 1,
            "message" => "Simpan Nama Printer Thermal Berhasil"
        )));
    }
}
?>