<?php
class Sucursal extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function buscar($conditions = null){
        if (!empty($conditions)) {
          $this->db->where($conditions);
        }
        $query = $this->db->get('sucursal');
        return $query->result_array();
    }

    public function agregar($sucursal,$sucursal_id = null) {
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('sucursal', $sucursal); 
        } else {
            $this->db->insert('sucursal', $sucursal);
        }
        
        return $this->db->insert_id();
    }
}
?>