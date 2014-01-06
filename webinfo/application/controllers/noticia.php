<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of noticia
 *
 * @author Sebastián Cerón
 */
class Noticia extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('noticia_model');
    }

    public function index() {
        $data['title'] = 'Noticia';
        $data['noticia'] = $this->noticia_model->leer_noticia();
        $this->load->view('plantilas/header', $data);
        $this->load->view('plantilas/body_noticia', $data);
        $this->load->view('plantilas/footer');
    }

    public function agregar() {

        if ($this->input->post()) {
            $noticia = array(
                'idnoticia' => $this->input->post('idnoticia', true),
                'titulo_noticia' => $this->input->post('titulo_noticia', true),
                'cuerpo_noticia' => $this->input->post('cuerpo_noticia', true),
                'fecha_publicacion_n' => $this->input->post('fecha_publicacion_n', true),
                'alias_user' => $this->input->post('alias_user', true)
            );
            if ($this->noticia_model->agregar($noticia)) {
                $this->session->set_flashdata('msg, los datos de la noticia han sido guardado exitosamente');
                redirect('noticia');
            } else {
                $this->session->set_flashdata('msg, los datos de la noticia no se han agregado correctamente');
                redirect('noticia');
            }
        }
    }

    public function editar($id = NULL) {
        $data['title'] = 'Editar noticia';
        $data['action'] = 'Editar';
        if ($this->input->post()) {
            $id = $this->input->post('idnoticia', true);
            $noticia = array(
                'idnoticia' => $this->input->post('idnoticia', true),
                'titulo_noticia' => $this->input->post('titulo_noticia', true),
                'cuerpo_noticia' => $this->input->post('cuerpo_noticia', true),
                'fecha_publicacion_n' => $this->input->post('fecha_publicacion_n', true),
                'alias_user' => $this->input->post('alias_user', true)
            );
            if ($this->noticia_model->editar($id, $noticia)) {
                $this->session->set_flashdata('msg, los datos de la noticia han sido actualizados exitosamente');
                redirect('noticia');
            } else {
                $this->session->set_flashdata('msg, los datos de la noticia no se han editado correctamente');
                redirect('noticia');
            }
        }
    }

}
