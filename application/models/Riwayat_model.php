<?php

class Riwayat_model extends CI_model
{
    private $table = 'pengguna_riwayat';

    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->limit(5)->order_by("id", "desc")->get();
        return $query->result();
    }

    public function add_riwayat($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
