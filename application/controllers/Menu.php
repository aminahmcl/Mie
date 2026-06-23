<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
    }

    private function jumlah_keranjang()
    {
        $row = $this->db->select_sum('qty')->get('keranjang')->row_array();

        if ($row && $row['qty'] != NULL) {
            return $row['qty'];
        } else {
            return 0;
        }
    }

    public function makanan()
    {
        $data['judul'] = 'Menu Makanan';
        $data['menu'] = $this->Menu_model->getMenuByKategori('makanan');
        $data['jumlah_keranjang'] = $this->jumlah_keranjang();

        $this->load->view('templates/header', $data); 
        $this->load->view('menu/makanan', $data);
        $this->load->view('templates/footer'); 
    }

    public function minuman()
    {
        $data['judul'] = 'Menu Minuman';
        $data['menu'] = $this->Menu_model->getMenuByKategori('minuman');
        $data['jumlah_keranjang'] = $this->jumlah_keranjang();

        $this->load->view('templates/header', $data);
        $this->load->view('menu/minuman', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_keranjang($id)
    {
        $menu = $this->db->get_where('menu', ['id' => $id])->row_array();

        if (!$menu) {
            redirect('menu/makanan');
        }

        $cek = $this->db->get_where('keranjang', ['id_menu' => $id])->row_array();

        if ($cek) {
            $this->db->where('id_menu', $id);
            $this->db->update('keranjang', [
                'qty' => $cek['qty'] + 1
            ]);
        } else {
            $data = [
                'id_menu' => $menu['id'],
                'nama'    => $menu['nama'],
                'harga'   => $menu['harga'],
                'gambar'  => $menu['gambar'],
                'qty'     => 1
            ];

            $this->db->insert('keranjang', $data);
        }

        $this->session->set_flashdata('success', 'Ditambahkan ke keranjang');

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function keranjang()
    {
        $data['judul'] = 'Keranjang';
        $data['keranjang'] = $this->db->get('keranjang')->result_array();
        $data['jumlah_keranjang'] = $this->jumlah_keranjang();

        $this->load->view('templates/header', $data);
        $this->load->view('menu/keranjang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_qty($id)
    {
        $item = $this->db->get_where('keranjang', ['id' => $id])->row_array();

        if ($item) {
            $this->db->where('id', $id);
            $this->db->update('keranjang', [
                'qty' => $item['qty'] + 1
            ]);
        }

        redirect('menu/keranjang');
    }

    public function kurang_qty($id)
    {
        $item = $this->db->get_where('keranjang', ['id' => $id])->row_array();

        if ($item) {
            if ($item['qty'] > 1) {
                $this->db->where('id', $id);
                $this->db->update('keranjang', [
                    'qty' => $item['qty'] - 1
                ]);
            } else {
                $this->db->where('id', $id);
                $this->db->delete('keranjang');
            }
        }

        redirect('menu/keranjang');
    }

    public function hapus_keranjang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('keranjang');

        redirect('menu/keranjang');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Menu'; 
        $data['menu'] = $this->db->get_where('menu', ['id' => $id])->row_array();

        if ($this->input->post()) {
            $dataUpdate = [
                "nama"     => $this->input->post('nama'),
                "harga"    => $this->input->post('harga'),
                "kategori" => $this->input->post('kategori')
            ];

            $this->db->where('id', $id);
            $this->db->update('menu', $dataUpdate);

            echo "<script>
            alert('Menu berhasil diubah!');
            window.location='".site_url('menu/admin?admin=1')."';
            </script>";
        }

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('menu/ubah', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu');

        redirect('menu/admin?admin=1');
    }

    public function admin()
    {
        if($this->input->get('admin') != '1'){
            redirect('menu/admin?admin=1');
        }

        if ($this->input->post()) {
            $config['upload_path']   = './assets/Images/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size']      = 5000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');

                $data = [
                    "nama"     => $this->input->post('nama'),
                    "harga"    => $this->input->post('harga'),
                    "gambar"   => $gambar,
                    "kategori" => $this->input->post('kategori')
                ];

                $this->db->insert('menu', $data);

                echo "<script>
                alert('Menu berhasil ditambahkan!');
                window.location='".site_url('menu/admin?admin=1&detail='.$this->input->post('kategori'))."';
                </script>";
                return;
            } else {
                $err = strip_tags($this->upload->display_errors());
                echo "<script>alert('$err');</script>";
            }
        }

        $data['judul'] = 'Admin Menu';
        $data['menu'] = $this->db->get('menu')->result_array();
        $data['jumlah_makanan'] = $this->db->where('kategori', 'makanan')->count_all_results('menu');
        $data['jumlah_minuman'] = $this->db->where('kategori', 'minuman')->count_all_results('menu');

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('menu/admin', $data);
    }
}