<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areas extends CI_Controller{

	public function insertar(){

		$areas = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'extension'=> $this->input->post('extension'),
			'ubicacion' => $this->input->post('ubicacion')
			);

		$this->load->model('areas_model');
		if ( $this->areas_model->insertar_areas($areas) )
			redirect('edit');
	}

	public function actualizar(){
		$areas = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'extension'=>$this->input->post('extension'),
			'ubicacion' => $this->input->post('ubicacion')
			);
		$id = $this->input->post('idareas');

		$this->load->model('areas_model');
		if( $this->areas_model->actualiza_areas($id, $areas) )
			redirect('edit');
	}

	public function eliminar(){
		$idareas = $this->uri->segment(3);
		$this->load->model('areas_model');
		if( $this->areas_model->eliminar_areas($idareas) )
			redirect('edit');
	}

	public function index(){
		$this->load->model('areas_model');
		$data['areas'] = $this->areas_model->leer_areas();

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);
			$data['areas_actualizar']	= $this->areas_model->traer_areas($id);
		}

		$this->load->helper(array('form'));
		$this->load->view('edit',$data);
	}

}
