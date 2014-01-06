<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contacto
 *
 * @author frubilar
 */
class contacto extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title']='Contacto';
        $this->load->view('plantilas/header',$data);
        $this->load->view('plantilas/body_contacto');
        $this->load->view('plantilas/footer');
    }

}

?>
