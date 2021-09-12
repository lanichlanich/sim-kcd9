<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ImportGtk extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_guru($data)
    {
        $this->db->insert_batch('daftar_guru', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function insert_tendik($data)
    {
        $this->db->insert_batch('daftar_tendik', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
