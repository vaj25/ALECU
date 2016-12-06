<?php
  class Miscelanea_model extends CI_Model{

    public $nosotros;

    function __construct() {
        parent::__construct();
        $this->load->database('alecu', TRUE);
    }

    public function obtenerDatos(){
      //$this->db->order_by("id_unidad_medida", "asc");
      $query = $this->db->get('miscelanea');
      if ($query->num_rows() > 0) {
          return  $query->result();
      }
      else {
          return FALSE;
      }
    }

   /* public function insertarUnidad($data){

        $this->nombre = $data['nombre'];
        $this->abreviatura = $data['abreviatura'];

        $this->db->insert('sib_unidad_medida', $this);
        return $this->db->insert_id();
    }

    public function obtenerUnidades(){
      //$this->db->order_by("id_unidad_medida", "asc");
      $query = $this->db->get('sib_unidad_medida');
      if ($query->num_rows() > 0) {
          return  $query->result();
      }
      else {
          return FALSE;
      }
    }

    public function obtenerUnidad($id){
        $this->db->where('id_unidad_medida',$id);
        $query = $this->db->get('sib_unidad_medida');
        if ($query->num_rows() > 0) {
          $nombre;
          foreach ($query->result() as $unidad) {
            $nombre = $unidad->nombre;
          }
          return  $nombre;
        }
        else {
            return FALSE;
        }
    }

    public function buscarUnidades($busca){
      $this->db->order_by("id_unidad_medida", "asc");
      $this->db->like('nombre', $busca);
      $this->db->or_like('abreviatura', $busca);
      $query = $this->db->get('sib_unidad_medida', 10);
      if ($query->num_rows() > 0) {
          return  $query->result();
      }
      else {
          return FALSE;
      }
    }

    public function actualizarUnidad($id, $data){
      $this->db->where('id_unidad_medida',$id);
      $this->db->update('sib_unidad_medida', $data);
    }

    public function eliminarUnidad($id){
      $this->db->delete('sib_unidad_medida', array('id_unidad_medida' => $id));
    }

    function totalUnidades(){
      return $this->db->count_all('sib_unidad_medida');
    }

    public function obtenerUnidadesLimit($porpagina, $segmento){
      $this->db->order_by("id_unidad_medida", "asc");
      $query = $this->db->get('sib_unidad_medida', $porpagina, $segmento);
      if ($query->num_rows() > 0) {
          return  $query->result();
      }
      else {
          return FALSE;
      }
    }

    public function obtenerIdPorNombre($nombre) {
      $this->db->where('nombre', $nombre);
      $query = $this->db->get('sib_unidad_medida');
      if ($query->num_rows() > 0) {
        return  $query->row('id_unidad_medida');
      }
      else {
          return FALSE;
      }
    }*/

  }
?>
