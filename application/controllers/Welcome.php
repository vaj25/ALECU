<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct() {
     parent::__construct();

     $this->load->model('Miscelanea_model');
		 $this->load->model('areas_model');
   }
	public function index()
	{
		$data['info'] = $this->Miscelanea_model->obtenerDatos();
		$data['areas'] = $this->areas_model->leer_areas();
		$this->load->helper(array('form'));
		$this->load->view('index',$data);
	}

	public function EnviarCorreo() {
		$this->load->library('email');
		//configuracion
		$configuracion = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'alb2594@gmail.com',
			'smtp_pass' => '',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);
		$this->email->initialize($configuracion);
		$this->email->from($this->input->post('email'), $this->input->post('nombre'));
		$this->email->to("vikca147@gmail.com");
		$this->email->subject($this->input->post('asunto'));
		$this->email->message($this->input->post('msj'));

		$this->email->send();
		var_dump($this->email->print_debugger());

		redirect('Welcome');
	}
}
