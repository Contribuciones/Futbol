<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rolesController extends CI_Controller {
	public function __construct(){
		$this->load->model('rolesModel');
	}

	public function obtenerRoles(){
		return $this->rolesModel->obtenerRoles();
	}
}
?>