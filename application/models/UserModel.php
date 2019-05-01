<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class UserModel extends CI_Model {
	/* Definición de atributos */
	public $id;
	public $first_name;
	public $last_name;
	public $email;
	public $type_user;

	/*
	* Constructor de clase vacio
	*/
	public function __construct() 
	{
		parent::__construct();
	}

	/**
	* Método para hacer el login de usuarios,
	* para ello hacemos uso de los datos enviados en el formulario
	**/
	public function login()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('usuario');

		// Verificamos que se haya obtenido la información
		if($query->num_rows() == 1)
		{
			return $query->row();
		} else
		{
			return null;
		}
	}
}