<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areas_model extends CI_Model{

	public function insertar_areas($areas){

		if ( $this->db->insert('areas_protegidas', $areas) )
			return true;		
		else
			return false;

	}

	public function leer_areas(){

		$this->db->order_by('idareas ASC');

		$query = $this->db->get('areas_protegidas');

		return $query->result();
	}

	public function traer_areas($id){

		$this->db->where('idareas', $id);

		$query = $this->db->get('areas_protegidas');

		return $query->row();
	}

	public function actualiza_areas($id, $areas){

		$this->db->where('idareas', $id);

		if( $this->db->update('areas_protegidas', $areas) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_areas($id){

		$this->db->where('idareas', $id);

		if( $this->db->delete('areas_protegidas') )
			return true;		
		else
			return false;		
		
	}

}