<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Category_m');
    }

    public function index()
    {
        $data = [
            'title' => 'Kategori Produk',
            'user' => infoLogin(),
            'content' => 'admin/ecommerce/category/index',
            'category' => $this->Category_m->getAllData()
        ];

        $this->load->view('admin/templates/main', $data);
    }

    public function inputKategori()
    {
        $this->Category_m->Save();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Data Kategori - <strong>Berhasil Ditambahkan!</strong>
        </div>');
        redirect('admin/category');
    }
}
