<?php
class Products_model extends CI_model
{
    public function getAllProducts($limit, $start)
    {
        return $this->db->get('produk', $limit, $start)->result_array();
    }

    public function getAllCategories()
    {
        return $this->db->get('kategori')->result();
    }

    public function getProductsByCategory($id_kategori)
    {
        return $this->db->get_where('produk', ['id_kategori' => $id_kategori])->result_array();
    }
}
