<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->helper(array('form'));
    $this->load->model('areas_model');
		$data['areas'] = $this->areas_model->leer_areas();

    $this->load->view('edit', $data);
  }
}

?>
