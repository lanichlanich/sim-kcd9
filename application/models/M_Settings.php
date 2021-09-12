<?php

class M_Settings extends CI_model
{

    //Informasi

    private $table_info = 'informasi';

    public function getAllInformasi()
    {
        $this->db->from($this->table_info);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function add_informasi($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function edit_informasi($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_informasi($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_informasi($id)
    {
        return $this->db->delete($this->table_info, array("id" => $id));
    }

    //Reset Password

    private $table_password = 'recovery_password';

    public function getAllResetPassword()
    {
        $this->db->from($this->table_password);
        $this->db->where("status", "0");
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function update_reset($table, $data_reset, $where_reset)
    {
        $this->db->update($table, $data_reset, $where_reset);
    }
}
