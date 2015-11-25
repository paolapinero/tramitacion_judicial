<?php
class Ficha extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getFichas(){
        $this->db->select('fichas.id,demandados.nombre,demandados.rut,estados.estado,subestados.subestado');
        $this->db->from('fichas');
        $this->db->join('demandados', 'demandados.id = fichas.demandado_id');
        $this->db->join('demandantes', 'demandantes.id = fichas.demandante_id');
        $this->db->join('subestados', 'subestados.id = fichas.subestado_id');
        $this->db->join('estados', 'estados.id = subestados.estado_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertar_fichas($fichas) {
        foreach ($fichas as $ficha) {
            //print_r($ficha);
            $this->db->insert('fichas', $ficha);
        }
        return true;
    }
}
?>