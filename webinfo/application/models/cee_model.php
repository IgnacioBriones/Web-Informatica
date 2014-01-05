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
                        select('cee.periodo, cee.id_cee, cee.cargo, cee.rut')
                        ->from($this->tabla)->get();
        /* if ($query) {
          $estudiante = $this->ws_dirdoc->getEstudiante($query->cee . rut);
          if ($estudiante) {

          $restudiante = array('nombre' => $estudiante->nombres . ' ' .
          $estudiante->apellidoPaterno . ' ' . $estudiante->apellidoMaterno,
          'codigoCarrera' => $estudiante->codigoCarrera,
          'email' => $estudiante->email,
          'rut' => $estudiante->rut,
          'cargo' => $query->cee.cargo,
          'periodo'=> $query->cee.periodo,

          );
          }
          } */
        return $query->result();
    }

    public function Comprobacion($rut) {
        $this->load->library('wsdirdoc');
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
        } else {
            return NULL;
        }
    }

}
