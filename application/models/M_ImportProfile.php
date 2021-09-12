<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ImportProfile extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function update_profile($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
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
