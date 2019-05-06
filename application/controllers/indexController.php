<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexController extends CI_Controller {

	/**
	* Constructor
	* Cargamos librerías y los archivos de modelo a utilizar
	**/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MatchModel','partido',true);
	}

	public function index(){
		$datos['partidos'] = $this->partido->obtenerPartidos();
		$this->load->view('default',$datos);
	}

}

?>