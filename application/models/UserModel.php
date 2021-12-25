<?php
class UserModel extends CI_Model 
{
	function saverecords()
	{
	//insert data into database table.  
          $data = array(  
                        'fname'     => $this->input->post('name'),  
                        'email'  => $this->input->post('email'),  
                        'password'   => md5($this->input->post('pass')),  
                        'mobile' => $this->input->post('mobile'), 
                        'course' => $this->input->post('course'), 
                        ); 
         
         // echo "<pre>";
         // print_r($data); die;
         $qq = $this->db->insert('students',$data);
         return $qq;
	}


	public function checkuser($emailid,$password)
	{
		// echo $emailid;
		// echo "<br>";

		 $pass = md5($password);
		// echo $pass; die;
		$this->db->select('id,fname,email,password');
		$this->db->from('students');
		$this->db->where('email',$emailid);
		$this->db->where('password',$pass);
		$query = $this->db->get();


		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else{
			return false;
			
		}
	}
}