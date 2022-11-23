<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
    // else  {
    //     $role_id = $ci->session->userdata('role_id');

    // }
}

function infoLogin()
{
    $ci = get_instance();
    return $ci->db->get_where('tb_user', ['email' => $ci->session->userdata('email')])->row_array();
}
