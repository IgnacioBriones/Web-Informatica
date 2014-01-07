<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funcionario_model
 *
 * @author IgnacioBriones
 */
class Funcionario_model extends CI_Model {

    var $tabla = 'funcionario';

    function __construct() {
        parent::__construct();
    }

    public function leer_funcionarios() {
        $query = $this->db->order_by('rut')->
                        select('rut, nombre_funcionario')
                        ->from($this->tabla)->get();
        return $query->result();
    }

    public function agregar($funcionario) {
        return $this->db->insert($this->tabla, $funcionario);
    }

    public function editar($ids, $dato) {
        return $this->db->
                        update($this->tabla, $dato)->where('rut', $idlaboral);
    }

    public function leer_funcionario($rut) {
        $query = $this->db->select('*')->where('rut',$rut)
                        ->from($this->tabla)->get()->row();
        return $query;
    }


}

?>