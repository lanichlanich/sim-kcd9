<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ImportSiswa extends CI_model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_pd($data)
	{
		$this->db->insert_batch('daftar_pd', $data);
		if ($this->db->affected_rows() > 0) {
			return 1;
		} else {
			return 0;
		}
	}
}
