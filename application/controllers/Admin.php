<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Products_model');
        $this->load->helper(array('form', 'url'));
        // $this->load->model('ModelAuth');
    }

    // BAGIAN PRODUK
    public function index()
    {
        $content['title'] = 'Data Produk';
        $content['page'] = 'dataproduk';
        $content['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $content['data_produk'] = $this->Products_model->get_all();
        if ($content['user']) {
            $this->load->view('templates/headerAdmin', $content);
            $this->load->view('admin/lihatProduk', $content);
            $this->load->view('templates/footerAdmin');
        } else {
            redirect('auth');
        }
    }

    public function kategori()
    {
        $content['title'] = 'Data Kategori';
        $content['page'] = 'datakategori';
        $content['data_kategori'] = $this->Products_model->getAllCategories();
        $this->load->view('templates/headerAdmin', $content);
        $this->load->view('admin/lihatKategori', $content);
        $this->load->view('templates/footerAdmin');
    }

    public function tambah_produk()
    {
        $content['title'] = 'Tambah Produk';
        $content['kategori'] = $this->Products_model->getAllCategories();
        $content['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim|is_unique[produk.nama_produk]', [
            'is_unique' => 'Produk Sudah Tersedia'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerAdmin', $content);
            $this->load->view('admin/tambahProduk', $content);
            $this->load->view('templates/footerAdmin');
        } else {
            $this->Admin_model->tambahProdukBaru();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Produk berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');
            redirect('admin/index');
        }
    }

    public function tambah_kategori()
    {
        $content['title'] = 'Tambah Kategori';

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim|is_unique[produk.nama_produk]', [
            'is_unique' => 'Produk Sudah Tersedia'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerAdmin', $content);
            $this->load->view('admin/tambahKategori', $content);
            $this->load->view('templates/footerAdmin');
        } else {
            $this->Admin_model->tambahKategoriBaru();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Kategori berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');
            redirect('admin/kategori');
        }
    }

    // public function addFotoProduk()
    // {
    //     $config['upload_path']          = './assets/images/fotoProduk/';
    //     $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //     $config['max_size']             = 100;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('fotoproduk')) {
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->load->view('templates/headerAdmin', $error);
    //         $this->load->view('admin/tambahProduk', $error);
    //         $this->load->view('templates/footerAdmin', $error);
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());
    //         $this->load->view('upload_success', $data);
    //     }
    // }

    public function ubah_produk($id)
    {
        $content['produk'] = $this->Products_model->get_product($id);
        $content['title'] = 'Ubah Produk';
        $content['kategori'] = $this->Products_model->getAllCategories();
        $content['kategoriProduk'] = $this->Products_model->get_kategori($content['produk']['id_kategori']);
        $content['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Ubah Produk";
            $this->load->view('templates/headerAdmin', $content);
            $this->load->view('admin/ubahProduk', $content);
            $this->load->view('templates/footerAdmin');
        } else {
            $this->Admin_model->editProduk($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Produk Berhasil Dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('admin');
        }
    }

    public function hapus_produk($id)
    {
        $cek = $this->Admin_model->delete_Produk($id);
        redirect('admin');
    }

    public function ubah_kategori($id)
    {
        $content['kategori'] = $this->Products_model->get_kategori($id);
        $content['title'] = 'Ubah Kategori';
        if ($this->form_validation->run() == false) {
            $data['title'] = "Ubah Kategori";
            $this->load->view('templates/headerAdmin', $content);
            $this->load->view('admin/ubahKategori', $content);
            $this->load->view('templates/footerAdmin');
        } else {
            $this->Admin_model->editKategori($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Kategori Berhasil Dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('admin/kategori');
        }
    }

    public function hapus_kategori($id)
    {
        $cek = $this->Admin_model->delete_Kategori($id);
        redirect('admin/kategori');
    }
}
