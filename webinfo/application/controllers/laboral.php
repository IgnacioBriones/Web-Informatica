<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of laboral
 *
 * @author Ignacio Briones
 */
class Laboral extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('laboral_model');
    }

    public function index() {
        $data['title'] = 'laboral';
        $data['laboral'] = $this->laboral_model->leer_laboral();
        $this->load->view('plantilas/header',$data);
        //$this->load->view('plantilas/body_laboral');
        $this->load->view('plantilas/footer');
    }

    public function agregar() {
        if ($this->input->post()) {
            $laboral = array(
                'idlaboral' => $this->input->post('idlaboral', true),
                'fecha_publicacion_l' => $this->input->post('fecha_publicacion_l', true),
                'titulo_laboral' => $this->input->post('titulo_laboral', true),
                'cuerpo_laboral' => $this->input->post('cuerpo_laboral', true),
                'contacto_laboral' => $this->input->post('contacto_laboral', true),
                'alias_usuario' => $this->input->post('alias_usuario', true),
            );
            if ($this->laboral_model->agregar($laboral)) {
                $this->session->set_flashdata('msg, la informacion de la tabla laboral han sido guardado exitosamente');
                redirect('laboral');
            } else {
                $this->session->set_flashdata('msg, la informacion de la tabla laboral no se han agregado correctamente');
                redirect('laboral');
            }
        }
    }

    public function editar($id = NULL) {
   
        if ($this->input->post()) {
            $id = $this->input->pots('id', true);
            $laboral = array(
                'idlaboral' => $this->input->post('idlaboral', true),
                'fecha_publicacion_l' => $this->input->post('fecha_publicacion_l', true),
                'titulo_laboral' => $this->input->post('titulo_laboral', true),
                'cuerpo_laboral' => $this->input->post('cuerpo_laboral', true),
                'contacto_laboral' => $this->input->post('contacto_laboral', true),
                'alias_usuario' => $this->input->post('alias_usuario', true),
            );
            if ($this->laboral_model->editar($idlaboral, $laboral)) {
                $this->session->set_flashdata('msg, la informacion de la tabla laboral ha sido actualizados exitosamente');
                redirect('laboral');
            } else {
                $this->session->set_flashdata('msg, la informacion de la tabla laboral no se han editado correctamente');
                redirect('laboral');
            }
        }
    }

}

?>
