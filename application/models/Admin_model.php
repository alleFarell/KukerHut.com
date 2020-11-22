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
            'harga_produk' => 'Rp. ' . htmlspecialchars($this->input->post('harga_produk', true)),
            'foto_produk' => 'default.png',
            'deskripsi_produk' => htmlspecialchars($this->input->post('deskripsi_produk', true)),
            'editor' => htmlspecialchars($this->input->post('editor', true))
        ];
        // foto produk belum
        $this->db->insert('produk', $data);
    }

    public function tambahKategoriBaru()
    {
        $data = [
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true))
        ];
        $this->db->insert('kategori', $data);
    }

    public function editProduk($id)
    {
        $data = array(
            'id_kategori' => htmlspecialchars($this->input->post('id_kategori', true)),
            'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'harga_produk' => htmlspecialchars($this->input->post('harga_produk', true)),
            // 'foto_produk' => 'default.png',
            'deskripsi_produk' => htmlspecialchars($this->input->post('deskripsi_produk', true)),
            'editor' => htmlspecialchars($this->input->post('editor', true))
        );
        $this->db->where('id_produk', $id);
        return $this->db->update('produk', $data);
    }

    public function editKategori($id)
    {
        $data = array(
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true))
        );
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data);
    }

    public function delete_Produk($id)
    {
        $this->db->where('id_produk', $id);
        return $this->db->delete('produk');
    }

    public function delete_Kategori($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->delete('kategori');
    }

    public function tambahAdminBaru()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];
        $this->db->insert('admin', $data);
    }
}
