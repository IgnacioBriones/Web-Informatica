<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author IgnacioBriones
 * 
 */
class Funcionario extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Funcionario_model');
    }

    public function index() {
        $data['title'] = 'Funcionario';
        $data['funcionario'] = $this->Funcionario_model->leer_funcionario();
        $this->load->view('plantilas/header',$data);
        //$this->load->view('body_funcionario');
        $this->load->view('plantilas/footer');
    }

    public function agregar() {
        $data['title'] = 'Agregar nuevo funcionario';
        $data['action'] = 'Agregar';
        if ($this->input->post()) {
            $funcionario = array(
                'rut' => $this->input->post('rut', true),
                'nombre_funcionario' => $this->input->post('nombre_funcionario', true),
                'paterno' => $this->input->post('paterno', true),
                'materno' => $this->input->post('materno', true),
                'alias_u' => $this->input->post('alias_u', true),
                'passwd'  => $this->input->post('passwd', true),
                );
            if ($this->funcionario_model->agregar($funcionario)) {
                $this->session->set_flashdata('msg, la informacion de el funcionario ha sido guardado exitosamente');
                redirect('funcionario');
            } else {
                $this->session->set_flashdata('msg, la informacion de el funcionario no ha sido guardada satisfactoriamente ');
                redirect('funcionario');
            }
        }
    }

    public function editar($id = NULL) {
        $data['title'] = 'Editar Funcionarios';
        $data['action'] = 'Editar';
        if ($this->input->post()) {
            $id = $this->input->post('rut', true);
            $carrera = array(
                'codigo' => $this->input->post('codigo', true),
                'nombre_carrera' => $this->input->post('nombre_carrera', true),
                'paterno' => $this->input->post('paterno', true),
                'materno' => $this->input->post('materno', true),
                'alias_u' => $this->input->post('alias_u', true),
                'passwd'  => $this->input->post('passwd', true),
            );
            if ($this->funcionario_model->editar($id, $carrera)) {
                $this->session->set_flashdata('msg, los datos de la carrera han sido actualizados exitosamente');
                redirect('funcionario');
            } else {
                $this->session->set_flashdata('msg, los datos de la carrera no se han editado correctamente');
                redirect('funcionario');
            }
        }
    }

}

?>