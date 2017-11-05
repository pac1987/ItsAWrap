<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
				$this->load->view('home');
	}

	public function send_mail(){

		$this->load->library('email');

		$this->email->from('bob@bob.com', 'Your Name');
		$this->email->to('your@email.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class');

		$this->email->send();

		echo $this->email->print_debugger();
	}
}
