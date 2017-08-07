<?php

class Registration_controller extends CI_Controller{
    
    function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('Reg_model');
		$this->load->library('session');
    }

    public function Validate_reg(){
				
		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password','Password','required', array('requried'=> 'You must provide a %s .'));
		$this->form_validation->set_rules('confirm','Password Confirmation','required|matches[password]', array('requried'=> 'You must provide a %s .'));

			if($this->form_validation->run() == FALSE){

				$this->load->view('register/regview');

			}else{
				$data_user = array(
				'name' => $this->input->post('name'),	
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				);
				$insert= $this->Reg_model->register($data_user);
				if(isset($insert)){
					echo "Fail to Register!";
				}else{
					$data['success']= "Successfully! ";
					$this->load->view('register/regview',$data);
					
				}
			}
		
	}
}