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
print_r($_POST['email']);

		$this->load->library('form_validation');
        $this->load->helper('url','form_validation');
		// validate form input
		$this->form_validation->set_rules('email', 'required');
		$this->form_validation->set_rules('password','required');

		if ($this->form_validation->run() === TRUE)
		{
			// check to see if the user is logging in
			// check for "remember me"
			//$remember = (bool)$this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password')))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('Welcome', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('Signin', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['email'] = [
				'name' => 'email',
				'id' => 'email',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
			];

			$this->data['password'] = [
				'name' => 'password',
				'id' => 'password',
				'type' => 'password',
			];
            $this->load->view('login');
			//$this->_render_page('auth' . DIRECTORY_SEPARATOR . 'login', $this->data);
		}
	}

}
?>