<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data = [
            'title' => 'Kategori Produk',
            'user' => infoLogin(),
            'content' => 'admin/ecommerce/category/index'
        ];

        $this->load->view('admin/templates/main', $data);
    }
}
