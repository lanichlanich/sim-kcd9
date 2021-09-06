<?php

class M_authentication extends CI_model
{

	public function cek_login()
	{
		$nama_pengguna	=	set_value('nama_pengguna');
		$password		=	set_value('password');

		$result			=	$this->db
			->where('nama_pengguna', $nama_pengguna)
			->where('password', $password)
			->limit(1)
			->get('pengguna');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}
