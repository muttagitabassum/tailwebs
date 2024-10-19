<?php
defined('BASEPATH') OR exit('No direct script access allowed');;
class Welcome extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }
	
	
	public function index()
	{
 if (!$this->session->userdata('user_id')) redirect('login');
		$this->load->view('header');
		$data['students']=$this->db->get('students');
		$this->load->view('home',$data);
		$this->load->view('footer'); 
	}
	public function login(){
		$this->load->view('login');
	}
	public function sessionDestroy(){
    $this->session->sess_destroy();
    redirect('login');
}
	//FUNCTION IS USED TO AUTHENTICATE ADMIN
	public function authLogin(){
		// print_r($this->input->post('email'));exit;
		if($this->input->post('username')){
			$email = $this->input->post('username');
			$password = $this->input->post('password');
			$adminData = $this->db->get_where('login',array("user_name" => $email));
			if($adminData->num_rows() > 0){
				$userData = $adminData->row();
				if($userData->password == $password){
					$_SESSION['user_id'] = $this->input->post('username');
				
					$this->session->set_flashdata('success', 'Welcome, You Are Successfully Login in..');
					redirect(base_url());
				}else{
					$this->session->set_flashdata('failure', 'Username/Email or Password is incorrect');
					redirect('login');
				}
			}else{
				$this->session->set_flashdata('failure', 'This account is banned by admin!');
				redirect('login');
			}
		}else{
			redirect('login');
		}
	}

 public function insertStudent(){
 	if($this->input->post('name')){
 		$getData=$this->db->where('name',$this->input->post('name'))->where('subject',$this->input->post('subject'))->get('students');
 		if($getData->num_rows()>0){
 				$updatedata=array(
       'marks'=>$this->input->post('marks'),
       'entery_date'=>date('Y-m-d')
 		);
 				$this->db->where('name',$this->input->post('name'))->where('subject',$this->input->post('subject'))->update('students',$updatedata);
 		}else{
 			$data=array(
       'name'=>ucfirst($this->input->post('name')),
       'subject'=>ucfirst($this->input->post('subject')),
       'marks'=>$this->input->post('marks'),
       'entery_date'=>date('Y-m-d')
 		);
 		$this->db->insert('students',$data);
 		}
 		$this->session->set_flashdata('success', 'Successfully added');
 		redirect(base_url());
 	}
 }
	 public function updateStudent(){
 	if($this->input->post('ename')){
 			$data=array(
       'name'=>ucfirst($this->input->post('ename')),
       'subject'=>ucfirst($this->input->post('esubject')),
       'marks'=>$this->input->post('emarks'),
 		);
 		$this->db->where('id',$this->input->post('eid'))->update('students',$data);
 		$this->session->set_flashdata('success', 'Successfully updated');
 		redirect(base_url());
 	}
 }

 public function deleteStudent(){
 	if($this->input->post('did')){
 		$this->db->where('id',$this->input->post('did'))->delete('students');
 		$this->session->set_flashdata('success', 'Successfully deleted');
 		redirect(base_url());
 	}
 }
}
