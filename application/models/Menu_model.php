<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    public function getMenuByKategori($kategori)
    {
        return $this->db->get_where('menu', ['kategori' => $kategori])->result_array();
    }
public function getAllMenu()
{
    return $this->db->get('menu')->result_array();
}
}