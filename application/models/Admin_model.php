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
        $query = $this->db->get('produk');
        $row = $query->row();
        if($row->foto_produk == "default.png"){
            return $this->db->delete('produk', array('id_produk' => $id));
        }else{
            unlink("./assets/images/fotoProduk/$row->foto_produk");
            return $this->db->delete('produk', array('id_produk' => $id));
        }
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

    public function getAllIklan()
    {
        return $this->db->get('iklan')->result_array();
    }
    public function tambahIklanBaru()
    {
        $data = [
            'nama_iklan' => htmlspecialchars($this->input->post('nama_iklan', true)),
            'foto_iklan' => 'default.png'
        ];
        $this->db->insert('iklan', $data);
    }
    public function delete_Iklan($id)
    {
        $this->db->where('id_iklan', $id);
        $query = $this->db->get('iklan');
        $row = $query->row();
        unlink("./assets/images/fotoIklan/$row->foto_iklan");
        return $this->db->delete('iklan', array('id_iklan' => $id));
    }

    public function deleteFotoLama($id)
    {
        $this->db->where('id_produk', $id);
        $query = $this->db->get('produk');
        $row = $query->row();
        unlink("./assets/images/fotoProduk/$row->foto_produk");
    }
}
