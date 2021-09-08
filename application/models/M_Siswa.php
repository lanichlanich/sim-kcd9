<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Siswa extends CI_Model
{
    private $table = 'daftar_pd';
    public function getAll()
    {
        $this->db->from($this->table);
        // $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
}
