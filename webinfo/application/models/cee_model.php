<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cee_model
 *
 * @author Sebastian Ceron
 */
class Cee_model extends CI_Model {

    var $tabla = 'cee';

    function __construct() {
        parent::__construct();
    }

    public function Leer_cee() {
        $query = $this->db->order_by('periodo')->
                        select('periodo, idcee, cargo, rut')
                        ->from($this->tabla)->get();
        return $query->result();
    }

    public function Comprobacion($rut) {
        $this->load->library('ws_dirdoc');
        $estudiante = $this->ws_dirdoc->getEstudiante($rut);
        if ($estudiante) {
            $usuario_estudiante = array(
                'nombres' => $estudiante->nombres,
                'apellidoPaterno' => $estudiante->apellidoPaterno,
                'apellidoMaterno' => $estudiante->apellidoMaterno,
                'codigoCarrera' => $estudiante->codigoCarrera,
                'email' => $estudiante->email,
                'estado' => $estudiante->estado,
                'rut' => $estudiante->rut
            );
            return $estudiante;
        } else {
            return NULL;
        }
    }
}
