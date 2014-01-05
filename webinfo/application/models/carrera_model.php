<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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
        parent::__construct();
    }

    public function leer_carreras() {
        $query = $this->db->get('carrera');
        return $query->result();
    }

    public function agregar($carrera) {
        return $this->db->insert($this->tabla, $carrera);
    }

    public function editar($ids, $dato) {
        return $this->db->
                        update($this->tabla, $dato)->where('codigo', $ids);
    }

    public function leer_carrera($codigo) {
        $query = $this->db->select('carrera.codigo, carrera.nombre_carrera')
                        ->from($this->tabla)->where($codigo)->get()->row();
        return $query;
    }

}

?>
