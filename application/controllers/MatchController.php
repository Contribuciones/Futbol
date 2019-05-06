<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MatchController extends CI_Controller {

	function __construct(){
		$this->load->model('MatchModel');
	}

	public function obtenerPartidos(){
		$this->MatchModel->obtenerPartidos();
	}

}

?>