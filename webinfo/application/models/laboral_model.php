<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of laboral_model
 *
 * @author Ignacio Briones
 */
class Laboral_model extends CI_Model {

    var $tabla = 'laboral';

    function __construct() {
        
    }

    Public function leer_laboral() {
        $query = $this->db->order_by('idlaboral')->
                get($this->tabla);
        return $query->result();
    }

    Public function agregar($laboral) {
        return $this->db->insert($this->tabla, $laboral);
    }

    public function editar($idlaboral, $dato) {
        return $this->db->
                        update($this->tabla, $dato)->where('codigo', $ids);
    }

    public function leer_laborales($idlaboral)
    {
         $query = $this->db->select('laboral.idlaboral, laboral.fecha_publicacion_l,
             laboral.titulo_laboral, laboral.cuerpo_laboral')
                        ->from($this->tabla)->where($idlaboral)->get()->row();
        return $query;
    }
    
}

?>
