<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data = [
            'title' => 'Produk',
            'user' => infoLogin(),
            'content' => 'admin/ecommerce/product/index'
        ];

        $this->load->view('admin/templates/main', $data);
    }
}
