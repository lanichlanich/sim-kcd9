<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Siswa extends CI_Model
{
    private $table = 'daftar_pd';

    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db
            ->order_by('npsn', 'asc')->get();
        return $query->result();
    }

    public function generateAll()
    {
        $this->db->from($this->table);
        $query = $this->db->order_by('npsn', 'asc')->get();
        return $query->result();
    }

    public function getWhere($npsn)
    {
        $this->db->from($this->table);
        $query = $this->db->where('npsn', $npsn)->get();
        return $query->result();
    }
}
