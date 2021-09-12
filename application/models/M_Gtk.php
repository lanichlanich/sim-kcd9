<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Gtk extends CI_Model
{
    private $table_guru = 'daftar_guru';

    private $table_tendik = 'daftar_tendik';

    public function getAllGuru()
    {
        $this->db->from($this->table_guru);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function getAllTendik()
    {
        $this->db->from($this->table_tendik);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }
}
