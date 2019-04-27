<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class TeamPlayerModel extends CI_Model {
	/* Definición de atributos */
	public $id;
	public $id_team;
	public $id_player;
	public $number;

	/*
	* Constructor de clase vacio
	*/
	public function __construct() {
		parent::__construct();
	}

}