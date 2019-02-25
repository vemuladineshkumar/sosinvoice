<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {


    public function index()
	{
		$this->load->helper('url','form_validation');
		
        $this->load->view('login');
        
    }
    

    public function login()
	{

	
		$this->load->library('form_validation');
        $this->load->helper('url','form_validation');
		// validate form input
		$this->form_validation->set_rules('email', 'required');
		$this->form_validation->set_rules('pass','required');

		if ($this->form_validation->run() === TRUE)
		{
		
			$this->load->view('login');
			
		}
		if ($this->input->post('email') | $this->input->post('pass'))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('Welcome/home', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('Signin', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		
	}

	public function signup()
	{

		$this->load->model('Login_model');
		$this->load->library('form_validation');
		$this->load->helper('url','form');
		if(!empty($_POST)){
		// validate form input
		$this->form_validation->set_rules('name','User Name','required');
		$this->form_validation->set_rules('email','Email','required | is_unique[users.email]');
		$this->form_validation->set_rules('pass','Password','required | min_length[8] | max_length[10]');
		$this->form_validation->set_rules('re-pass','Confirm Password','required | min_length[8] | max_length[10] | matches[pass]');
		$this->form_validation->set_message('required','This field is Mandatory');
		$this->form_validation->set_message('min_length','Minimum length should be greater than 8 Characters');
		if ($this->form_validation->run() == false)
		{
			echo validation_errors();
			$this->load->view('signup');
			
		}else{
		$username = $this->input->post('name');
		$email = $this->input->post('email');
		$paaword = $this->input->post('pass');
		$params =array(
			'username' => $username,
			'email' => $email,
			'password'=>$paaword
		);
		
		$this->Login_model->addusers($params);
	}



	// 	if ( $this->ion_auth->register($email ,$paaword, $email, $additional_data ))
	// 	{
	// 		// check to see if we are creating the user
	// 		// redirect them back to the admin page
	// 		$this->session->set_flashdata('message', $this->ion_auth->messages());
	// 		redirect("Sign/login", 'refresh');
	// 	}


	// 	// if ($this->input->post('email') | $this->input->post('pass'))
	// 	// 	{
	// 	// 		//if the login is successful
	// 	// 		//redirect them back to the home page
	// 	// 		$this->session->set_flashdata('message', $this->ion_auth->messages());
	// 	// 		$this->load->view('login', 'refresh' );
	// 	// 	}
	// 	// 	else
	// 	// 	{
	// 	// 		// if the login was un-successful
	// 	// 		// redirect them back to the login page
	// 	// 		$this->session->set_flashdata('message', $this->ion_auth->errors());
	// 	// 		///redirect('Signin', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
	// 	// 		$this->load->view('signup', 'refresh' );
	// 	// 	}
	}else{
		
		$this->load->view('signup');
	}
	 }

	public function logout()
	{
		
		// log the user out
		

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		session_destroy();
		redirect('Signin', 'refresh');
	}
	
}
?>