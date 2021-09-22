<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_sma_ipa = 'us_sma_ipa';
    private $table_sma_ips = 'us_sma_ips';
    private $table_smk = 'us_smk';
    private $table_pd = 'daftar_pd';
    private $table_mapel = 'mapel';
    private $table_nilai = 'nilai';
    private $table_ijazah = 'ijazah';

    public function import_sma_ipa($data)
    {
        $this->db->insert_batch('us_sma_ipa', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function import_sma_ips($data)
    {
        $this->db->insert_batch('us_sma_ips', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function import_smk($data)
    {
        $this->db->insert_batch('us_smk', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function list_sma_ipa()
    {
        $this->db->select('*');
        $this->db->from($this->table_sma_ipa);
        $this->db->join($this->table_pd, 'daftar_pd.nisn = us_sma_ipa.nisn')->where('us_sma_ipa.npsn', $this->session->nama_pengguna);
        $query = $this->db->get();
        return $query->result();
    }
    public function list_sma_ips()
    {
        $this->db->select('*');
        $this->db->from($this->table_sma_ips);
        $this->db->join($this->table_pd, 'daftar_pd.nisn = us_sma_ips.nisn')->where('us_sma_ips.npsn', $this->session->nama_pengguna);
        $query = $this->db->get();
        return $query->result();
    }
    public function list_smk()
    {
        $this->db->select('*');
        $this->db->from($this->table_smk);
        $this->db->join($this->table_pd, 'daftar_pd.nisn = us_smk.nisn')->where('us_smk.npsn', $this->session->nama_pengguna);
        $query = $this->db->get();
        return $query->result();
    }

    //Mapel
    public function getAllMapel()
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

    //Nilai
    public function getAllNilai()
    {
        $this->db->from($this->table_nilai);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function getAllNilaiSiswa($data)
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->where($data)->get();
        return $query->result();
    }
}
