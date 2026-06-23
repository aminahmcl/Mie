<?php
class Menu_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['menu'] = $this->Menu_model->getAllMenu();
        $this->load->view('admin/menu/index', $data);
    }

    public function tambah()
    {
        if ($this->input->post()) {

            $data = [
                "nama" => $this->input->post('nama'),
                "harga" => $this->input->post('harga'),
                "gambar" => $this->input->post('gambar'),
                "kategori" => $this->input->post('kategori')
            ];

            $this->db->insert('menu', $data);

            redirect('menu_admin');
        }

        $this->load->view('admin/menu/tambah');
    }
}