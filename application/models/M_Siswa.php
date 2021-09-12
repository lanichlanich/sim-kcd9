<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Siswa extends CI_Model
{
    private $table = 'daftar_pd';

    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function countAllSiswa()
    {
        $this->db->from($this->table);
		$dataArray = array('periode' => '2122', 'npsn' => $this->session->nama_pengguna);
        $query = $this->db->where($dataArray)->get();
        return $query->num_rows();
    }
}
