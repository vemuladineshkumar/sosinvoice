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
		if ($this->ion_auth->login($this->input->post('email'), $this->input->post('pass')))
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

	public function logout()
	{
		
		// log the user out
		$this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('Signin', 'refresh');
	}
	public function phpinfo(){
		phpinfo();
	}
	
}
?>