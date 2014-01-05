<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of noticia_model
 *
 * @author Sebastián Cerón
 */
class Noticia_model extends CI_Model {
    var $tabla = 'noticia';

    function __construct() {
        parent::__construct();
    }

    public function leer_noticia() {
        $query = $this->db->get('noticia');
        return $query->result();
    }

    public function agregar($noticia) {
        return $this->db->insert($this->tabla, $noticia);
    }

    public function editar($ids, $dato) {
        return $this->db->
                        update($this->tabla, $dato)->where('idnoticia', $ids);
    }

    public function leer_noticias($idnoticia) {
        $query = $this->db->select('idnoticia, titulo_noticia, cuerpo_noticia, fecha_publicacion_n, alias_user')
                        ->from($this->tabla)->where($idnoticia)->get()->row();
        return $query;
    }
    
}
