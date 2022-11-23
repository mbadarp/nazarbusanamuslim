<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    protected $table = 'tb_user';
    protected $primary = 'id';

    public function Save()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'no_telp' => '',
            'address' => '',
            'role_id' => 1,
            'is_active' => 1,
            'date_created' => time()
        ];

        return $this->db->insert($this->table, $data);
    }
}
