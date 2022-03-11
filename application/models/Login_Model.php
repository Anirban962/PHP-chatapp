<?php 
class Login_Model extends CI_Model
{
	function saverecords($data)
	{
		$query=$this->db->insert("registration_table",$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function checkmail($email)
	{
		$query=$this->db->query("SELECT * FROM registration_table WHERE email='$email'");
		if($query->num_rows()==0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function signinrecords($user_email,$password)
	{
		$query=$this->db->query("SELECT * FROM `registration_table` WHERE email='$user_email' AND password='$password'");
		if($query->num_rows())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function desigcheck($user_email,$password)
	{
		$desigcheck=$this->db->query("SELECT * FROM `registration_table` WHERE email='$user_email' AND password='$password'");
      return $desigcheck->result();
	}

	function updaterecordsbyid($id)
	{
		$query=$this->db->query("SELECT * FROM registration_table WHERE email='$id'");
		return $query->result();

	}

	function updaterecords($data1,$id)
	{
		$this->db->where("email",$id);
		if($this->db->update("registration_table",$data1))
		{
			return true;
		}
		else
		{
			return false;
			
		}
	}
	

}


 ?>