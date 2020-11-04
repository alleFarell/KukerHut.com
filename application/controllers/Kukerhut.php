<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kukerhut extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model');
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('contents/home');
        $this->load->view('templates/footer');
    }
    public function products()
    {
        $data['produk'] = $this->Products_model->getAllProducts();
        $this->load->view('templates/header');
        $this->load->view('contents/products', $data);
        $this->load->view('templates/footer');
    }
}
