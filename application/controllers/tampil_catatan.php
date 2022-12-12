<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampil_catatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $this->load->model('m_catatan');
        $data['catatan'] = $this->m_catatan->ambil_catatan();
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tampil_catatan', $data);
        $this->load->view('templates/footer');
    }

    public function edit_catatan($id)
    {
        $where = array('id' => $id);
        $data['editcatatan'] = $this->M_catatan->edit_catatan($where, 'catatan')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_catatan', $data);
        $this->load->view('templates/footer');
    }



    public function update($id)
    {
        $where      = array('id' => $id);
        $tanggal    = $this->input->post('tanggal');
        $jam        = $this->input->post('jam');
        $lokasi     = $this->input->post('lokasi');
        $suhu       = $this->input->post('suhu');


        $data = array(
            'tanggal'   => $tanggal,
            'jam'       => $jam,
            'lokasi'    => $lokasi,
            'suhu'      => $suhu,

        );
        $where = array(
            'id' => $id
        );
        $this->M_catatan->update($where, $data, 'catatan');
        $this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			Data Berhasil Diupdate!
			</div>');
        redirect('tampil_catatan');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_catatan->hapus_catatan($where, 'catatan');
        $this->session->set_flashdata('message', '<div
			class="alert alert-danger alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><spa
			aria-hidden="true">&times;</span></button>
			Data Berhasil Dihapus!
		</div>');

        redirect('tampil_catatan');
    }
}
