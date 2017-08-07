<?php


class Login_controller extends CI_Controller {
	
	public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->model('Login_model');
			$this->load->library('session');
     
		}
	public function validateform()
		{	
			$this->form_validation->set_rules('email', 'Email','required|valid_email');
			$this->form_validation->set_rules('password','Pass','required', array('requried'=> 'You must provide a %s .'));

			if ($this->form_validation->run()== FALSE) {	

				$this->load->view('login/log_in');
				
			}
			else{
				$data = array(
				'email' => $this->input->post('email'),
				'pass' => md5($this->input->post('password'))
				);
				$result = $this->Login_model->get_user($data);
				if($result== TRUE){
					$email = $this->input->post('email');
					$result = $this->Login_model->read_user($email);
					$session_data = array(
					'username' => $result[0]->name,
					'email' => $result[0]->email,);
					// Add user data in session
				$this->session->set_userdata('log_in', $session_data);

				redirect(base_url("Blog_controller/magazine"));
				}else{
					$data['invalid']= "Wrong email or password !";
					$this->load->view('login/log_in', $data);
				}
			}
		}
		public function logout() {

		// Removing session data
		$sesion_a = array(
		'username' => ''
		);
		$this->session->unset_userdata('log_in', $sesion_a);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login/log_in', $data);
		}

		
	}

	

