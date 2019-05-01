<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller{

	public __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		
	}

	public function index(){
		$this->load->view('login');
	}
}
?>