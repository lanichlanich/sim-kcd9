<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah_model extends CI_Model
{
    private $table = 'profile_sekolah';

    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db
            ->order_by('nama_sekolah', 'asc')->get();
        return $query->result();
    }

    public function getWhere($npsn)
    {
        $this->db->from($this->table);
        $query = $this->db->where('npsn', $npsn)->get();
        return $query->result();
    }

    public function getAllProfileOrder()
    {
        $this->db->from($this->table);
        $query = $this->db
            ->order_by('npsn', 'asc')->get();
        return $query->result();
    }
}
