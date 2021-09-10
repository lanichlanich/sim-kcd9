<?php

class M_Profile extends CI_model
{
    private $table = 'pengguna';

    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db
            ->where('nama_pengguna', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    public function getAllPengguna()
    {
        $this->db->from($this->table);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function add_profile($table, $data)
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
}
