<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class TeamModel extends CI_Model {
	/* Definición de atributos */
	public $id;
	public $name;

	/*
	* Constructor de clase vacio
	*/
	public function __construct() {
		parent::__construct();
	}

	public function obtener(){
		$consulta = $this->db->query('select * from equipo');
		return $consulta->result();
	}

	public function insertar($nombre){
		$this->db->insert('name',$nombre);
	}

	public function modificar($id,$nombre){
		$this->db->update('');
	}

	public function eliminar($id){
		$this->db->delete($id);
	}

}