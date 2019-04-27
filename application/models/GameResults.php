<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class GameResultsModel extends CI_Model {
	/* Definición de atributos */
	public $id;
	public $id_match;
	public $winning_team;
	public $loser_team;
	public $dead_heat;
	public $goals_team1;
	public $goals_team2;

	/*
	* Constructor de clase vacio
	*/
	public function __construct() {
		parent::__construct();
	}

}