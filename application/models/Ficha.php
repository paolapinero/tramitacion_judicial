<?php
class Ficha extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertar_fichas($fichas) {
        foreach ($fichas as $ficha) {
            //print_r($ficha);
            $this->db->insert('ficha', $ficha);
        }
        return true;
    }
}
?>