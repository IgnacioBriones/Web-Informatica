<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main_template
 *
 * @author frubilar
 */
class Main_template extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Informatica UTEM';
        $this->load->view('plantilas/header',$data);
        $this->load->view('plantilas/body_index');
        $this->load->view('plantilas/footer');
    }

}

?>
