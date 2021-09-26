<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_mapel = 'mapel';
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

    //Admin
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->join('mapel', 'pengguna.nama_pengguna = mapel.npsn');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllNilaiAdmin($data)
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->join('nilai', 'pengguna.nama_pengguna = nilai.npsn');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllMapel($data_m)
    {
        $this->db->from($this->table_mapel);
        $this->db->where('jurusan', $data_m);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllIjazah($data_i)
    {
        $this->db->from($this->table_ijazah);
        $this->db->where('nama_siswa', $data_i);
        $query = $this->db->get();
        return $query->result();
    }
}
