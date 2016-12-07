<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Miscelanea_model');
  }

  public function index() {
    $this->load->helper(array('form'));
    $this->load->model('areas_model');
		$data['areas'] = $this->areas_model->leer_areas();
    $data['info'] = $this->Miscelanea_model->obtenerDatos();
    $this->load->view('edit', $data);
  }

  public function actualizarNosotros(){
		$nos = array(
			'nosotros' => $this->input->post('nosotros')
			);
		if( $this->Miscelanea_model->actualiza_nosotros($nos) )
			redirect('edit');
	}

  public function actualizarObjetivo(){
		$obj = array(
			'objetivo' => $this->input->post('objetivo')
			);
		if( $this->Miscelanea_model->actualiza_objetivo($obj) )
			redirect('edit');
	}

  public function actualizarCita(){
		$cit = array(
			'cita' => $this->input->post('cita')
			);
		if( $this->Miscelanea_model->actualiza_cita($cit) )
			redirect('edit');
	}

  public function actualizarAutor(){
		$aut = array(
			'autor' => $this->input->post('autor')
			);
		if( $this->Miscelanea_model->actualiza_autor($aut) )
			redirect('edit');
	}

  public function actualizarArea(){
		$are = array(
			'areas' => $this->input->post('areas')
			);
		if( $this->Miscelanea_model->actualiza_areas($are) )
			redirect('edit');
	}
}

?>
