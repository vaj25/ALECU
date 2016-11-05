<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form'));
    $this->load->library(array('form_validation'));
    $this->load->model('User_model');
  }

  public function index() {
    $data['title'] = "Login";
    $data['msg'] = $this->load->view('mensajes', array('alert' => $this->uri->segment(3), 'controller' => 'login'), TRUE);
    $this->load->view('login_view', $data);
  }

  public function verificaLogin() {

    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[50]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[50]|callback_check_database');

    if ($this->form_validation->run() == FALSE) {
      redirect('login/index/error_autenticar');
    } else {
       if ($this->session->userdata('logged_in')) {
         $user = $this->session->userdata('logged_in');
         redirect('Welcome'.'/');
       }
    }

  }

  public function check_database($password) {
    if ($password != '') {
      $username = $this->input->post('username');
      $user = $this->User_model->login(array('username' => $username, 'password' => $password));

      if ($user) {
        $sess = array(
          'id' => $user->id_user,
          'nombre_completo' => $user->name,
          'usuario' => $user->username
        );

        $this->session->set_userdata('logged_in', $sess);

        return TRUE;
      } else {
        return FALSE;
      }

    } else {
      return FALSE;
    }

  }

  public function logout() {
    if($this->session->userdata('logged_in')){
      $this->session->unset_userdata('logged_in');
      session_destroy();
      redirect('login/index/cerrar', 'refresh');
    }
  }
}

?>
