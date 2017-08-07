<?php
class Blog_controller extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
            $this->load->model('Blog_model');
            $this->load->library('session');
		}
      
        public function magazine()
        {       
            

                $data['recent']= $this->Blog_model->get_recent();
                $data['menu']= $this->Blog_model->get_menu();
                $data['question']= $this->Blog_model->get_question();
        		$this->load->view('magazine/home',$data);
        }
}