<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_nilai = 'nilai';
    private $table_ijazah = 'ijazah';

    public function import_nilai($data)
    {
        $this->db->insert_batch('nilai', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getAllNilai()
    {
        $this->db->from($this->table_nilai);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function getAllNilaiJurusan($data)
    {
        $this->db->from($this->table_nilai);
        $query = $this->db->where($data)->get();
        return $query->result();
    }

    public function getAllNilaiSiswa($data)
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->where($data)->get();
        return $query->result();
    }

    public function countAllNilai()
    {
        $this->db->from($this->table_nilai);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->num_rows();
    }

    public function update_nilai($data, $where)
    {
        $this->db->update('nilai', $data, $where);
    }
}
