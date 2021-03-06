<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
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
        $dataArray = array('periode' => '2122', 'npsn' => $this->session->nama_pengguna);
        $query = $this->db->where($dataArray)->get();
        return $query->num_rows();
    }

    public function generateAllSiswa()
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

    public function insert_pd($data)
    {
        $this->db->insert_batch('daftar_pd', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
