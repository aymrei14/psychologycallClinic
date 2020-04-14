<?php
class User_model extends CI_model
{
    public function tambah_pasien($data)
    {
        return $this->db->insert('pasien', $data);
    }
    public function getDatabyUsername($user)
    {
        return $this->db->get_where('pasien', ['username' => $user['username']])->row_array();
    }
}
