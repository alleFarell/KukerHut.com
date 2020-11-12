<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Get semua data Produk dari sebuah tabel
    public function get_data($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function tambahProdukBaru()
    {
        $data = [
            'id_kategori' => htmlspecialchars($this->input->post('id_kategori', true)),
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true)),
            'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'harga_produk' => htmlspecialchars($this->input->post('harga_produk', true)),
            'foto_produk' => 'default.png',
            'deskripsi_produk' => htmlspecialchars($this->input->post('deskripsi_produk', true)),
            'harga_produk' => htmlspecialchars($this->input->post('harga_produk', true))
        ];
        // foto produk belum
        $this->db->insert('produk', $data);
    }
}
