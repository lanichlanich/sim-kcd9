<?php

class M_profile extends CI_model
{
    private $table = 'pengguna';

    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db
            ->where('nama_pengguna', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function update_profile($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
}
