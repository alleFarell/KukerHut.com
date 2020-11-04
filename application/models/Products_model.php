<?php 
class Products_model extends CI_model
{
    public function getAllProducts()
    {
        return $this->db->get('produk')->result_array();
    }
}
?>