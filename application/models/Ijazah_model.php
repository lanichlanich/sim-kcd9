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

    public function getIjazahById($id)
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->where('id', $id)->get();
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

    public function save_data()
    {
        $data = [
            'npsn' => $this->input->post('npsn'),
            'nisn' => $this->input->post('nisn'),
            'nama_siswa' => $this->input->post('nama_siswa'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
            'no_ijazah' => $this->input->post('no_ijazah'),
            'ijazah_file' => $this->input->post('ijazah_file'),
        ];

        $this->db->insert('ijazah', $data);
    }
}
