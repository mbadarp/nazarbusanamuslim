<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validatin');
        $this->load->model('administrator');
    }

    public function index()
    {
        $data = [
            'title' => 'Login Page'
        ];

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validatin->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/auth/login', $data);
        } else {
            $this->login();
        }
    }

    private function login()
    {
    }
}
