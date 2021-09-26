<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gtk_model extends CI_Model
{
    private $table_guru = 'daftar_guru';

    private $table_tendik = 'daftar_tendik';

    public function getAllGuru()
    {
        $this->db->from($this->table_guru);
        $query = $this->db->get();
        return $query->result();
    }

    //By NPSN 
    public function getWhereGuru($npsn)
    {
        $this->db->from($this->table_guru);
        $query = $this->db->where('npsn', $npsn)->get();
        return $query->result();
    }

    public function insert_guru($data)
    {
        $this->db->insert_batch('daftar_guru', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getAllTendik()
    {
        $this->db->from($this->table_tendik);
        $query = $this->db->get();
        return $query->result();
    }

    //By NPSN
    public function getWhereTendik($npsn)
    {
        $this->db->from($this->table_tendik);
        $query = $this->db->where('npsn', $npsn)->get();
        return $query->result();
    }

    public function insert_tendik($data)
    {
        $this->db->insert_batch('daftar_tendik', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
