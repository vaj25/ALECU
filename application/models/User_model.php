<?php
  class User_model extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    public function login($data){
      $this->db->select('name,username,password')
               ->from('usuario')
               ->where('username', $data['username'])
               ->where('password', MD5($data['password']));
      $query=$this->db->get();
      if ($query->num_rows() > 0) {
        return $query->row();
      } else {
        return FALSE;
      }
    }


    public function validarAcceso($id_usuario) {
      if ($id_usuario == 0) {
        return FALSE;
      } else {
        $this->db->select('count(*) AS num')
              ->from('usuario', 'id_user = '.$id_usuario );
        $query = $this->db->get();
        if ($query->row('num') == 1) {
          return TRUE;
        } else {
          return FALSE;
        }
      }

    }

    public function obtenerUsuario($id) {
      $this->db->select("*")
           ->from("usuario")
           ->where("id_user", $id);
       $query = $this->db->get();
       if ($query->num_rows() > 0) {
         return $query->row();
       } else {
         return FALSE;
       }
    }

    public function modificarNombre($data) {
      if (TRUE) {
        $this->db->where('username', $data['user'])
                 ->set('name', $data['nombre']);
        $this->db->update('usuario');
        return TRUE;
      }
      return FALSE;
    }

    public function modificarPass($data) {
      if ($this->validarPass($data['user'], $data['old_pass'], $data['new_pass'])) {
        $this->db->where('username', $data['user'])
                 ->set('password', MD5($data['new_pass']));
        $this->db->update('usuario');
        var_dump($data);
        return TRUE;
      }
      return FALSE;
    }

    public function obtenerUsuarios() {

    }

    public function EliminarUsuario($user) {

    }

    public function validarPass($user, $pass, $n_pass = FALSE) {
      $this->db->where('username', $user)
             ->where('password', MD5($pass))
             ->from('usuario');
      $query = $this->db->get();
      if ($query->num_rows() > 0) {
        return TRUE;
      } else {
        return FALSE;
      }
    }

  }
?>
