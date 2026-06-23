<?php

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lokasi_model'); 
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Lokasi';
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();

        if ($this->input->post('keyword')) {
            $data['lokasi'] = $this->Lokasi_model->cariDataLokasi();
        }

        // VALIDASI
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama wajib diisi'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('lokasi/index', $data); 
            $this->load->view('templates/footer');

        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat')
            ];

            $this->db->insert('lokasi', $data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('lokasi');
        }
    }

    public function ubah()
    {
        $this->Lokasi_model->ubahDataLokasi();
        $this->session->set_flashdata('flash', 'diubah');
        redirect('lokasi');
    }

    public function hapus($id)
    {
        $this->Lokasi_model->hapusDataLokasi($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('lokasi');
    }
}
?>