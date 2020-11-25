<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model');
        $this->load->model('Admin_model');
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Page";
            $this->load->view('templates/header');
            $this->load->view('auth/login');
            $this->load->view('templates/footerAdmin');
        } else {
            $this->_login();
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Wrong Username/Password</div>');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Wrong Username/Password</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">You are not an admin</div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">You have been logged out</div>');
        redirect('auth');
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]', [
            'is_unique' => 'Username Sudah Terpakai'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Registration Page";
            $this->load->view('templates/header');
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/footerAdmin');
        } else {
            $this->Admin_model->tambahAdminBaru();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, Akun Anda Telah Terdaftar, Silahkan Login</div>');
            redirect('auth');
        }
    }
}
