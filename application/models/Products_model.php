<?php
class Products_model extends CI_model
{
    public function getAllProducts($limit, $start)
    {
        return $this->db->get('produk', $limit, $start)->result_array();
    }

    public function getAllCategories()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getCategory()
    {
        return $this->db->get('kategori')->result();
    }

    public function get_all()
    {
        return $this->db->get('produk')->result_array();
    }

    public function getProductsByCategory($table, $id_kategori, $limit, $start)
    {
        return $this->db->get_where($table, array('id_kategori' => $id_kategori), $limit, $start)->result_array();
    }

    public function getProductsByCat($id_kategori)
    {
        return $this->db->query("select * from produk where id_kategori like '$id_kategori'")->result_array();
    }

    public function getCategoryByProduct($id_kategori)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row('nama_kategori');
    }

    public function get_product($id)
	{
		$this->db->where('id_produk', $id);
		return $this->db->get('produk')->row_array();
    }

    public function get_kategori($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->get('kategori')->row_array();
    }
}
