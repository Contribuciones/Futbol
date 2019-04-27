<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class PlayerModel extends CI_Model {
	/* Definición de atributos */
	public $id;
	public $first_name;
	public $last_name;

	/*
	* Constructor de clase vacio
	*/
	public function __construct() {
		parent::__construct();
	}

}