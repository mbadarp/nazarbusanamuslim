<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => infoLogin(),
            'content' => 'admin/dashboard/index'
        ];
        $this->load->view('admin/templates/main', $data);
    }
}
