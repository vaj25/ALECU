<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areas extends CI_Controller{

	public function __construct() {
    parent::__construct();
    $this->load->model('Miscelanea_model');
  }

	public function insertar(){

		$areas = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'extension'=> $this->input->post('extension'),
			'ubicacion' => $this->input->post('ubicacion'),
			'latitud'=> $this->input->post('latitud'),
			'longitud'=> $this->input->post('longitud')
			);

		$this->load->model('areas_model');
		if ( $this->areas_model->insertar_areas($areas) )
			redirect('Areas/index/insert');
	}

	public function actualizar(){
		$areas = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'extension'=>$this->input->post('extension'),
			'ubicacion' => $this->input->post('ubicacion'),
			'latitud'=> $this->input->post('latitud'),
			'longitud'=> $this->input->post('longitud')
			);
		$id = $this->input->post('idareas');

		$this->load->model('areas_model');
		if( $this->areas_model->actualiza_areas($id, $areas) )
			redirect('Areas/index/update');
	}

	public function eliminar(){
		$idareas = $this->uri->segment(3);
		$this->load->model('areas_model');
		if( $this->areas_model->eliminar_areas($idareas) )
			redirect('Areas/index/delete');
	}

	public function index(){
		$this->load->model('areas_model');
		$data['areas'] = $this->areas_model->leer_areas();
		$data['info'] = $this->Miscelanea_model->obtenerDatos();
		if( $this->uri->segment(3) != '' ){
			$data['msg'] = $this->load->view('mensajes', array('alert' => $this->uri->segment(3), 'controller' => "area"), TRUE);
			$id = $this->uri->segment(3);
 			$data['areas_actualizar']	= $this->areas_model->traer_areas($id);
		}

		$this->load->helper(array('form'));
		$this->load->view('Edit',$data);
	}

}
