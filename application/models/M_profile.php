<?php

class M_Profile extends CI_model
{
    private $table_pengguna = 'pengguna';

    private $table_profile = 'profile_sekolah';

    private $table_rombel = 'daftar_rombel';

    public function getAll()
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

    public function countAllRombel()
    {
        $this->db->from($this->table_rombel);
        $query = $this->db->where('npsn', $this->session->nama_pengguna)->get();
        return $query->num_rows();
    }

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
}
