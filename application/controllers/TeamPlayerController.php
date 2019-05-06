<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamPlayerController extends CI_Controller {

	function __construct(){
		$this->load->model('TeamPlayerModel');
	}

	public function index(){
		$this->load->view('teamPlayer');
	}

	public function getJugadores(){
		
	}

	public function insertar()
	{
		$datos = array('name' =>  $this->input->post('nombre'));
		$this->TeamPlayerModel->insertar($datos);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function modificar(){
		$datos = array(
			'id' => $this->input->post('id'),
			'name'=> $this->input->post('nombre'));
		$this->TeamPlayerModel->modificar($datos);
	} 

	public function eliminar($id){
		if(is_numeric($id)){
			$eliminar=$this->usuarios_model->eliminar($id_usuario);
	          if($eliminar==true){
	              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
	          }else{
	              $this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
	          }
	          redirect(base_url());
	      }else{
	      	redirect(base_url());
	      }
	}
}

?>