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

}