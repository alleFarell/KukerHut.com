<?php 
class Products_model extends CI_model
{
    public function getAllProducts($limit,$start)
    {
        return $this->db->get('produk',$limit,$start)->result_array();
    }

    public function getAllCategories()
    {
        return $this->db->get('kategori')->result();
    }

    public function getProductsByCategory($kategori)
    {
        $id_kategori = $this->db->get_where('kategori', array('Kategori'->$kategori))->row('id_kategori');
        return $this->db->order_by('id_kategori','desc')->get_where('produk', array('id_kategori'->$id_kategori))->result();
    }
}
?>