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
        $alecu = $this->load->database('alecu', TRUE);
        $alecu->select('count(*) AS num')
        $query = $alecu->get();
        if ($query->row('num') == 1) {
          return TRUE;
        } else {
          return FALSE;
        }
      }

    }

    public function obtenerUsuario($id) {
      $alecu = $this->load->database('alecu', TRUE);
      $alecu->select("*")
           ->from("org_usuario")
           ->where("id_user", $id);
       $query = $mtps->get();
       if ($query->num_rows() > 0) {
         return $query->row();
       } else {
         return FALSE;
       }
    }
  }
?>
