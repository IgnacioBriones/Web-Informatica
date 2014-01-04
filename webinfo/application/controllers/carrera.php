<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of carrera
 *
 * @author sebastian ceron
 */
class Carrera extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('carrera_model');
    }

    public function index() {
        $data['title'] = 'Carreras';
        $data['carreras'] = $this->carrera_model->leer_carreras();
        $this->load->view('plantillas/header');
        $this->load->view('body_carrera');
        $this->load->view('footer');
    }

    public function agregar() {
        $data['title'] = 'Agregar nueva carrera';
        $data['action'] = 'Agregar';
        if ($this->input->post()) {
            $carrera = array(
                'codigo' => $this->input->post('codigo', true),
                'nombre_carrera' => $this->input->post('nombre_carrera', true),
            );
            if ($this->Carrera_model->agregar($carrera)) {
                $this->session->set_flashdata('msg, los datos de la carrera han sido guardado exitosamente');
                redirect('carrera');
            } else {
                $this->session->set_flashdata('msg, los datos de la carrera no se han agregado correctamente');
                redirect('carrera');
            }
        }
    }

    public function editar($id = NULL) {
        $data['title'] = 'Editar carrera';
        $data['action'] = 'Editar';
        if ($this->input->post()) {
            $id = $this->input->post('id', true);
            $carrera = array(
                'codigo' => $this->input->post('codigo', true),
                'nombre_carrera' => $this->input->post('nombre_carrera', true),
            );
            if ($this->Carrera_model->editar($id, $carrera)) {
                $this->session->set_flashdata('msg, los datos de la carrera han sido actualizados exitosamente');
                redirect('carrera');
            } else {
                $this->session->set_flashdata('msg, los datos de la carrera no se han editado correctamente');
                redirect('carrera');
            }
        }
    }

}
