<?php

class Lokasi_model extends CI_Model {

    public function getAllLokasi()
    {
        return [
            [
                "id" => 1,
                "nama" => "Mie Ayam Top Cabang 1",
                "alamat" => "Jl. A. Yani, Banjarmasin"
            ],
            [
                "id" => 2,
                "nama" => "Mie Ayam Top Cabang 2",
                "alamat" => "Jl. Veteran, Banjarmasin"
            ],
            [
                "id" => 3,
                "nama" => "Mie Ayam Top Cabang 3",
                "alamat" => "Jl. Pramuka, Banjarmasin"
            ]
        ];
    }

    public function cariDataLokasi()
    {
        $keyword = strtolower($this->input->post('keyword'));

        $data = $this->getAllLokasi();
        $hasil = [];

        foreach ($data as $lokasi) {
            if (
                strpos(strtolower($lokasi['nama']), $keyword) !== false ||
                strpos(strtolower($lokasi['alamat']), $keyword) !== false
            ) {
                $hasil[] = $lokasi;
            }
        }

        return $hasil;
    }

    public function ubahDataLokasi()
    {
        // Tidak dipakai tanpa database
    }

    public function hapusDataLokasi($id)
    {
        // Tidak dipakai tanpa database
    }
}