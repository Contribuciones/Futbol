<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	* Constructor
	* Cargamos librerías y los archivos de modelo a utilizar
	**/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel', 'user', true);
		$this->load->helper('form');
	}

	/**
	* Método para renderizar la página de login o la pantalla inicial,
	* según sea el caso
	**/
	public function index()
	{
		if ($this->session->has_userdata('isLogin')) 
		{
			// Regresar la pantalla de inicio
			$this->load->view('home');
		} else
		{
			// Regresar el login
			$this->load->view('login');
		}
	}

	/**
	* Método para loguear a un usuario
	**/
	public function login()
	{
		// Buscamos al usuario
		$user = $this->user->login();
		if ($user === null) 
		{
			$this->session->set_flashdata('error_login','No se ha encontrado el usuario. Verifica tus datos');
			redirect(base_url(), 'refresh');
			//$this->load->view('login');
		} else
		{
			// Guardamos la información del usuario en sesión
			$info_user = array('id' => $user->id, 'first_name' => $user->first_name, 'last_name' => $user->last_name, 'email' => $user->email, 'type_user' => $user->type_user, "isLogin" => true);

			$this->session->set_userdata($info_user);
			redirect(base_url(), 'refresh');
		}
	}

	/**
	* Método para cerrar sesión
	**/
	public function logout()
	{
		if($this->session->userdata())
			$this->session->sess_destroy();

		redirect(base_url());
	}
}
