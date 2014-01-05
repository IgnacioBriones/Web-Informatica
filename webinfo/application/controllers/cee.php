<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cee
 *
 * @author Ignacio Briones
 */
class Cee extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cee_model');
    }

    Public function index() {
        $data['title'] = 'Centro de Estudiantes';
        $data['Cee'] = $this->Cee_model->leer_cee();
        $this->load->view('plantillas/header',$data);
        $this->load->view('plantillas/body_cee',$data);
        $this->load->view('plantillas/footer');
    }

    Public function traer() {
        if ($this->input->post()) {
            $rut = $this->input->post('rut', TRUE);
            $estudiante = $this->Cee->model->comprobacion($rut);
            if ($estudiante) {
                $this->session->set_flashdata('msg', 'la comprobacion del rut ha sido exitosa');
            } else {
                $this->session->set_flashdata('msg', 'la comprobacion del rut no ha tenido exito');
            }
        }
    }
}

?>
