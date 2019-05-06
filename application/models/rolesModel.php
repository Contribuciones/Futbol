<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class rolesModel extends CI_Model {
	public $id_types;
	public $descripcion;

	public __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function obtenerRoles(){
		$consulta = $this->db->query('select * from roles');
		return $consulta->result();
	} 
}

?>