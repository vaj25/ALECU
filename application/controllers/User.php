<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if($this->session->userdata('logged_in') == FALSE){
      redirect('login/index/error_no_autenticado');
    }
    $this->load->model('User_model');
  }

  public function index() {
    $this->load->view('user_view', $this->session->userdata('logged_in'));
  }

  public function Users() {
    $this->load->view('users_view', array('data' => $this->User_model->obtenerUsuarios(), ));
  }

  public function RecibirDatos() {
    $data;
    if ('nombre'== $this->input->post('tipo')) {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'user' => $this->input->post('user'),
        'pass' => $this->input->post('pass'),
      );
      if( $this->User_model->modificarNombre($data) )
        redirect("/User/index/update");
    } else if ('pass'== $this->input->post('tipo')) {
      $data = array(
        'new_pass' => $this->input->post('pass'),
        'old_pass' => $this->input->post('pass_o'),
        'user' => $this->input->post('user'),
      );
      if( $this->User_model->modificarPass($data) )
        redirect("/User/index/update");
    }
  }

  public function UpdateUser() {
    $data;
    if ('nombre'== $this->input->post('tipo')) {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'user' => $this->input->post('user'),
        'user_admin' => "admin.alecu",
        'pass' => $this->input->post('pass'),
      );
      if( $this->User_model->modificarNombreUsers($data) )
        redirect("/User/Users/update");
    } else if ('pass'== $this->input->post('tipo')) {
      $data = array(
        'new_pass' => $this->input->post('pass'),
        'pass' => $this->input->post('pass_o'),
        'user' => $this->input->post('user'),
        'user_admin' => "admin.alecu",
      );
      if( $this->User_model->modificarPassUsers($data) )
        redirect("/User/Users/update");
    } else if ('new'== $this->input->post('tipo')) {
      $data = array(
        'name' => $this->input->post('nombre'),
        'password' => MD5($this->input->post('pass_o')),
        'username' => $this->input->post('user'),
      );
      if( $this->User_model->insertarUsers($data) )
        redirect("/User/Users/new");
    } elseif ('mod'== $this->input->post('tipo')) {
      redirect("/User/Users/error");
    }
  }

  public function DeleteUser() {
    $this->User_model->EliminarUsuario($this->uri->segment(3));
    redirect("/User/Users/delete");
  }
}

?>
