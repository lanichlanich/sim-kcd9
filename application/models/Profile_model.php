<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_pengguna = 'pengguna';

    private $table_profile = 'profile_sekolah';

    private $table_siswa = 'daftar_pd';

    private $table_rombel = 'daftar_rombel';

    private $table_guru = 'daftar_guru';

    private $table_tendik = 'daftar_tendik';

    //DATA

    public function getPengguna()
    {
        $this->db->from($this->table_pengguna);
        $query = $this->db->where('nama_pengguna', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function getAllProfile()
    {
        $this->db->from($this->table_profile);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function getAllPengguna()
    {
        $this->db->from($this->table_pengguna);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllSiswa()
    {
        $this->db->from($this->table_siswa);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function getAllRombel()
    {
        $this->db->from($this->table_rombel);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

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

    //HITUNG JUMLAH

    public function countAllSiswa()
    {
        $this->db->from($this->table_siswa);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->num_rows();
    }

    public function countAllRombel()
    {
        $this->db->from($this->table_rombel);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->num_rows();
    }

    public function countAllGuru()
    {
        $this->db->from($this->table_guru);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->num_rows();
    }

    public function countAllTendik()
    {
        $this->db->from($this->table_tendik);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->num_rows();
    }

    //FUNGSI CRUD

    public function simpan_pengguna($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function edit_pengguna($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_profile($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_profile($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert_rombel($data)
    {
        $this->db->insert_batch('daftar_rombel', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
