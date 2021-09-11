<?php

class M_authentication extends CI_model
{

	public function cek_login()
	{
		$nama_pengguna	=	set_value('nama_pengguna');
		$set_password	=	set_value('password');
		$password		=	md5($set_password);

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

	public function cek_npsn()
	{
		$npsn	=	set_value('npsn');

		$result	 =	$this->db->where('nama_pengguna', $npsn)->limit(1)->get('pengguna');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function recovery_password($table, $data)
	{
		$this->db->insert($table, $data);
	}
}
