<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if($this->session->userdata('logged_in') == FALSE){
      redirect('login/index/error_no_autenticado');
    }
    $this->load->model('Miscelanea_model');
    $this->load->model('areas_model');
  }

  public function index() {
    $this->load->helper(array('form'));
		$data['areas'] = $this->areas_model->leer_areas();
    $data['info'] = $this->Miscelanea_model->obtenerDatos();
    $data['historial'] = $this->Miscelanea_model->obtener_historial();
    $data['msg'] = $this->load->view('mensajes', array('alert' => $this->uri->segment(3)), TRUE);
    $this->load->view('edit', $data);
  }

  public function historial() {
    $this->load->helper(array('form'));
    $data['areas'] = $this->areas_model->leer_areas();
    $data['info'] = $this->Miscelanea_model->obtener_datos_historial($this->uri->segment(3));
    $data['historial'] = $this->Miscelanea_model->obtener_historial();
    $data['aplicar'] = TRUE;
    $this->load->view('edit', $data);
  }

  public function actualizarNosotros(){
		$nos = array(
			'nosotros' => $this->input->post('nosotros')
			);
		if( $this->Miscelanea_model->actualiza_nosotros($nos) )
			redirect('edit/index/update');
	}

  public function actualizarObjetivo(){
		$obj = array(
			'objetivo' => $this->input->post('objetivo')
			);
		if( $this->Miscelanea_model->actualiza_objetivo($obj) )
			redirect('edit/index/update');
	}

  public function actualizarCita(){
		$cit = array(
			'cita' => $this->input->post('cita')
			);
		if( $this->Miscelanea_model->actualiza_cita($cit) )
			redirect('edit/index/update');
	}

  public function actualizarAutor(){
		$aut = array(
			'autor' => $this->input->post('autor')
			);
		if( $this->Miscelanea_model->actualiza_autor($aut) )
			redirect('edit/index/update');
	}

  public function actualizarArea(){
		$are = array(
			'areas' => $this->input->post('areas')
			);
		if( $this->Miscelanea_model->actualiza_areas($are) )
			redirect('edit/index/update');
	}

  public function actualizarSlide() {
    $config['upload_path'] = "assets/image/";
    $config['allowed_types'] = "jpg";
    $config['max_size'] = "500000";

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('image')) {
        //*** ocurrio un error
        $data['uploadError'] = $this->upload->display_errors();
        echo $this->upload->display_errors();
        return;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $num = $this->input->post('numero');
      $sld;
      switch ($num) {
        case 1:
          $sld = array(
            'slide1' => 'assets/image/' . $data['upload_data']['raw_name'],
            'cita_slide1' => $this->input->post('cita'),
          );
          break;
        case 2:
          $sld = array(
            'slide1' => 'assets/image/' . $data['upload_data']['raw_name'],
            'cita_slide1' => $this->input->post('cita'),
          );
          break;
        case 3:
          $sld = array(
            'slide1' => 'assets/image/' . $data['upload_data']['raw_name'],
            'cita_slide1' => $this->input->post('cita'),
          );
          break;
        default:
          break;
      }
  		if( $this->Miscelanea_model->actualiza_slide($sld) )
  		  redirect('edit/index/update');
    }
  }

  public function actualizarEstado() {
    $this->Miscelanea_model->actualizar_estado($this->uri->segment(3));
    redirect('edit/index/update');
  }

  public function eliminarHistorial() {
    $this->Miscelanea_model->eliminar_miscelanea($this->input->post('historial'));
    redirect('edit');
  }
}

?>
