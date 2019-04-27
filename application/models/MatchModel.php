<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class MatchModel extends CI_Model {
	/* Definición de atributos */
	public $id;
	public $team_1;
	public $team_2;
	public $date;
	public $referee;

	/*
	* Constructor de clase vacio
	*/
	public function __construct() {
		parent::__construct();
	}

}