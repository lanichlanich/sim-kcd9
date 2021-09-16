<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ijazah_model extends CI_Model
{
    private $table_ijazah = 'ijazah';

    public function getAllIjazah()
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->get();
        return $query->result();
    }

    public function getIjazah()
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    //By NPSN
    public function getWhereIjazah($npsn)
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->where('npsn', $npsn)->get();
        return $query->result();
    }

    public function save_ijazah($data)
    {
        $this->db->insert_batch('ijazah', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
