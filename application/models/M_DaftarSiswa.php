<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_DaftarSiswa extends CI_Model
{
    private $table = 'daftar_pd';

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("nipd", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }
}
