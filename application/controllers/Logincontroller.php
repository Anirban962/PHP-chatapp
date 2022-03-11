<?php
class Logincontroller extends CI_Controller
{
	function __construct()
	{
		parent::__construct(); //default constructor.
		$this->load->model("Login_Model");
		$this->load->library("session");
	}

	function about()
	{
		$this->load->view("about");
	}
	function feedback()
	{
		$this->load->view("feedback");
	}
	function contact()
	{
		$this->load->view("contact");
	}

	function signin()
	{
		$this->load->view("login");
		if($this->input->post("signin"))
		{
			$_SESSION['email']=$this->input->post("email");
			$user_email=$_SESSION['email'];
			$password=md5($this->input->post("password"));
			if($this->Login_Model->signinrecords($user_email,$password))
			{
				$result['data']=$this->Login_Model->desigcheck($user_email,$password);
				$_SESSION['name']=$result['data'][0]->name;
				$_SESSION['image']=$result['data'][0]->picsource;

				if($result['data'][0]->desig=='admin')
				{					
					redirect("Logincontroller/admindashboard");		
				}
				if($result['data'][0]->desig=='client')
				{
					if($result['data'][0]->authenticate=='1')
					{
						redirect("Logincontroller/userdashboard");
					}
					else
					{
						echo "you are blocked by admin.:)please contact admin";
					}

				}
			}
		}
	}

	function register()
	{
		$this->load->view("registration");
		if($this->input->post("submit"))
		{
			$name=$this->input->post("name");
			$email=$this->input->post("email");
			if($this->Login_Model->checkmail($email))
			{
				$password=md5($this->input->post("password"));
				$address=$this->input->post("address");
				$dob=$this->input->post("dob");
				$gender=$this->input->post("gender");
				$phone=$this->input->post("phone");
				$filename=$_FILES["uploadimage"]["name"];
				$tempname=$_FILES["uploadimage"]["tmp_name"];
				$folder="image/".$filename;
				move_uploaded_file($tempname, $folder);

				$data= array("name"=>$name,"email"=>$email,"password"=>$password,"address"=>$address,"dob"=>$dob,"gender"=>$gender,"phone"=>$phone,"picsource"=>$folder,"desig"=>'client',"status"=>'offline',"authenticate"=>'1');
				if($this->Login_Model->saverecords($data))
				{
				 // echo "inserted successfully.";
					redirect("Logincontroller/signin");

				}
				else
				{
					echo "not inserted.";
				}
			}
			else
			{
				echo "Email already registered.";
			}
			
		}
	}

	function sent()
	{
		if($this->input->post("submit"))
		{
			$_SESSION["name"]= $this->input->post("name");
		}
		
		$config=array(
			'protocol'=> 'smtp',
			'smtp_host'=> 'ssl://smtp.googlemail.com',
			'smtp_port'=> 465,
			'smtp_user'=> 'aviseksen369@gmail.com',
			'smtp_pass'=>'Pinku91$',
			'charset'=> 'iso-8859-1',
			'mailtype'=> 'html',
			'wordwrap'=> TRUE
		);

		$to=  $this->input->post("email");
		$sub= "Registration Confirmation Mail";
		$body='Hello'." ".$_SESSION["name"]." "."Welcome To Cute Tinder."." "."You have successfully registered with us."." "."Happy Chatting!!!";

		$this->load->library("email",$config);
		$this->email->set_newline("\r\n");

		$this->email->from("aviseksen369@gmail.com","");
		$this->email->to($to);
		$this->email->subject($sub);
		$this->email->message($body);

		if($this->email->send())
		{
			// echo "mail sent successfully";
			redirect("Logincontroller/signin");
		}
		else
		{
			echo "mail not send";
		}		
	}

//userdashboard starts here
	function userdashboard()
	{
		$this->load->view("user");	
	}

	function edit_user()
	{
		$id= $_SESSION['email'];
		$pics= $_SESSION['image'];
		$result['data']=$this->Login_Model->updaterecordsbyid($id);
		// print_r($result);
		$this->load->view("edit_user_profile",$result);
		if($this->input->post("submit"))
		{
			$update_name=$this->input->post("update_name");
			$email=$this->input->post("email");
			$address=$this->input->post("address");
			$dob=$this->input->post("dob");
			$gender=$this->input->post("gender");
			$phone=$this->input->post("phone");
			$filename=$_FILES["uploadimage"]["name"];
			$tempname=$_FILES["uploadimage"]["tmp_name"];
			$folder="image/".$filename;
			
			$data= array("name"=>$update_name,"address"=>$address,"dob"=>$dob,"gender"=>$gender,"phone"=>$phone,"picsource"=>$pics);
			
			$data1= array("name"=>$update_name,"address"=>$address,"dob"=>$dob,"gender"=>$gender,"phone"=>$phone,"picsource"=>$folder);

			if($folder="image/")
			{
				if ($this->Login_Model->updaterecords($data,$id))
				{
					redirect("Logincontroller/logout");
				}
				else
				{
					echo "data not updated";
				}

			}

			else
			{
				move_uploaded_file($tempname, $folder);	
				if ($this->Login_Model->updaterecords($data1,$id))
				{
					redirect("Logincontroller/logout");

				}
				else
				{
					echo "data not updated";
				}


			}
		}
	}

	function changepass()
	{
		$this->load->view("change_pass");
	}


	function logout()
	{
		session_unset();
		redirect("Logincontroller/signin");
	}

}






?>