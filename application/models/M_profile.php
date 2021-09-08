<?php

class M_profile extends CI_model
{
    public function update_profile($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
}
