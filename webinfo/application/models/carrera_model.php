<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of carrera_model
 *
 * @author IgnacioBriones
 */
class Carrera_model extends CI_Model {

    var $tabla = 'carrera';

    function __construct() {
        
    }

    Public function leer_carrera() {
        $query = $this->db->order_by('codigo')->
                        select('carrera.codigo, carrera.nombre_carrera')
                        ->from($this->tabla)->get();
        return $query->result();
    }

    Public function agregar($carrera) {
        return $this->db->insert($this->tabla, $carrera);
    }

    public function editar($ids, $dato) {
        return $this->db->
                        update($this->tabla, $dato)->where('codigo', $ids);
    }

    public function leer_carreras($codigo) {
        $query = $this->db->select('carrera.codigo, carrera.nombre_carrera')
                        ->from($this->tabla)->where($codigo)->get()->row();
        return $query;
    }

}

?>
