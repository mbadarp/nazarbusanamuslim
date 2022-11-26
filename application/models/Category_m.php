<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_m extends CI_Model
{
    protected $table = 'tb_category';
    protected $primary = 'id_category';

    public function getAllData()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function Save()
    {
        $data = [
            'category' => htmlspecialchars($this->input->post('category'), true)
        ];
        return $this->db->insert($this->table, $data);
    }

    public function Delete($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }
}
