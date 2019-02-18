<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index()
	{
		
		
		$this->load->view('login');
    }
    
    public function adduser()
	{
	
		
		$this->load->view('login');
	}