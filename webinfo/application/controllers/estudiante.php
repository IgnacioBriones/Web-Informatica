<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estudiante
 *
 * @author frubilar
 */
class estudiante extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title']='Estudiantes';
        $this->load->view('plantilas/header',$data);
        $this->load->view('plantilas/body_estudiante');
        $this->load->view('plantilas/footer');
    }
            

}

?>
