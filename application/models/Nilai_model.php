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
    private $table_pd = 'daftar_pd';

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
}
