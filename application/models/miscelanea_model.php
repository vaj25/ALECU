<?php
  class Miscelanea_model extends CI_Model{

    public $nosotros;

    function __construct() {
        parent::__construct();
        $this->load->database('alecu', TRUE);
    }

    public function obtenerDatos(){
      $this->db->where("estado", "activo");
      $query = $this->db->get('miscelanea');
      if ($query->num_rows() > 0) {
          return  $query->result();
      }
      else {
          return FALSE;
      }
    }

    public function actualiza_nosotros($nos){

      $this->db->where('id_misc', $this->duplica_registro());
  		if( $this->db->update('miscelanea', $nos) )
  			return true;
  		else
  			return false;

  	}

    public function actualiza_objetivo($obj){

      $this->db->where('id_misc', $this->duplica_registro());
  		if( $this->db->update('miscelanea', $obj))
  			return true;
  		else
  			return false;

  	}

    public function actualiza_cita($cit){

      $this->db->where('id_misc', $this->duplica_registro());
  		if( $this->db->update('miscelanea', $cit))
  			return true;
  		else
  			return false;

  	}

    public function actualiza_autor($aut){

      $this->db->where('id_misc', $this->duplica_registro());
  		if( $this->db->update('miscelanea', $aut))
  			return true;
  		else
  			return false;

  	}

    public function actualiza_areas($are){

      $this->db->where('id_misc', $this->duplica_registro());
  		if( $this->db->update('miscelanea', $are))
  			return true;
  		else
  			return false;

  	}

    public function actualiza_slide($slide){

      $this->db->where('id_misc', $this->duplica_registro());
      if( $this->db->update('miscelanea', $slide))
        return true;
      else
        return false;

    }

    /*
    * metodo duplica el registro activo
    * cambia el estado a no activo del
    * registro antiguo
    * devuelve el id del nuevo registro
    */
    public function duplica_registro() {

      $id = 0;
      $select = $this->db->select("id_misc, nosotros, objetivo, cita, autor, areas, logo_jpg, logo_png, slide1, cita_slide1, slide2, cita_slide2, slide3, cita_slide3")
                         ->where("estado", "activo")
                         ->get("miscelanea");

      if ($select->num_rows()) {
        $row = $select->row_array();
        $id_ant = $row['id_misc'];
        unset($row['id_misc']);

        $insert = $this->db->insert('miscelanea', $row);
        $id = $this->db->insert_id();

        $this->db->where('id_misc', $id_ant);
        $this->db->update('miscelanea', array('estado' => "no activo"));
      }

      return $id;

    }

    public function obtener_historial() {

      $this->db->where("estado", "no activo");
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
