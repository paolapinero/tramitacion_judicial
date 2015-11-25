<?php
class Rango extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getRangos($conditions = null){
        $query = $this->db->get('rangos');
        $result = array();
        foreach ($query->result_array() as $value) {
          $result[$value['id']] = $value['rango'];
        }
        return $result;
    }
}
?>