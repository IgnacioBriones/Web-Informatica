<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news
 *
 * @author frubilar
 */
class news extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Noticia';
        $this->load->view('plantilas/header', $data);
        $this->load->view('form/noticia');
        $this->load->view('plantilas/footer');
    }

    //put your code here
}

?>
