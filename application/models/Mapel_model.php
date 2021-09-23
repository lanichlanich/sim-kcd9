<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_mapel = 'mapel';

    //Mapel
    public function getAllMapel()
    {
        $this->db->from($this->table_mapel);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllMapelSekolah()
    {
        $this->db->from($this->table_mapel);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function insert_jurusan_mapel($data)
    {
        $this->db->insert_batch('mapel', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function update_mapel($data, $where)
    {
        $this->db->update('mapel', $data, $where);
    }
}
