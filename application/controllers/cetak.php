<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $this->load->model('m_catatan');

        $data['print'] = $this->m_catatan->print_catatan();
        $this->load->view('cetak', $data);
    }
}
