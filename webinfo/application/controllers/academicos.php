<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of academicos
 *
 * @author frubilar
 */
class academicos extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title']='Academicos';
        $this->load->view('plantilas/header',$data);
        $this->load->view('plantilas/body_academico');
        $this->load->view('plantilas/footer');
    }

    //put your code here
}

?>
