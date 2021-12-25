<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Userlib
{
    
    private $error = array();

	function __construct()
	{
		$this->ci =& get_instance();		
		$this->ci->load->library('session');
		$this->ci->load->database();
	}

function isEmailExist($email, $user_id=null) {
			$this->ci->db->select('id as user_id,email,fname');

			if($user_id > 0 )
			$this->ci->db->where('id', $user_id);
			else
			$this->ci->db->where('email', $email);

			$query = $this->ci->db->get('students');
			
			return $query->row();
	}

	function isLogin($email){
		$this->ci->db->select('id');
		$this->ci->db->where('email', $email);
		//$this->ci->db->where('auth_token','');
		$query = $this->ci->db->get('students');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	}