<?php 
class Products_model extends CI_model
{
    public function getAllProducts($limit,$start)
    {
        return $this->db->get('produk',$limit,$start)->result_array();
    }
}
?>