<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'content' => 'admin/dashboard/index'
        ];
        $this->load->view('admin/templates/main', $data);
    }
}
