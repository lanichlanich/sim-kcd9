<?php 

class M_authentication extends CI_model{
    
	public function cek_login()
	{
		$id		        =	set_value('id');
		$password		=	set_value('password');

		$result			=	$this->db->where('id',$id)
									 ->where('password',$password)
									 ->limit(1)
									 ->get('user');

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}
