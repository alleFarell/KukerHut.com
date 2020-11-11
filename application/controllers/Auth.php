<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAuth');
        $this->load->model('KukerHut');
    }


    public function index()
    {
        $user = $this->db->get_where('admin', ['role' => 'admin'])->row_array();
        $password = $this->input->post('password');
            if (password_verify($password, $user['password'])) {
                redirect('admin');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password</div>');
                redirect('auth');
            }
    }

    public function logout()
    {
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">You have been logged out</div>');
        redirect('KukerHut');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}