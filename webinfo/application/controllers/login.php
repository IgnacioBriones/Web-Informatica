<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        session_start();
    }
            

    public function index()
        {  
            $data['title'] = 'Index';
            $this->load->view('plantilas/header',$data);
//            $this->load->view('templates/public_head');
            $this->load->view('login');
            $this->load->view('plantilas/footer');
        }
        
    public function validar()
    {
        $password = $this->input->post('password', true);
        $rut = $this->input->post('rut', true);
        $_SESSION['rut'] = $rut;
        $pass = hash('sha256', strtoupper($password));
        $this->load->library('ws_dirdoc');
        //var_dump($docente);
        //echo $docente->tipo;
        $auth = $this->ws_dirdoc->autenticar($rut, $pass);
        //¿QUE HACER CUANDO TIRE ERROR??
            $this->load->model('funcionario_model');
            $fun =  $this->funcionario_model->leer_funcionario($rut);
            if($fun)
            {
                $ps = $fun['passwd'];
                if($ps == $pass)
                {
                    $nomb= $fun->alias_f;
                    $_SESSION['nombre'] = $nomb;
                    $this->load->view('login_head');
                }
            }
            else{
            $this->load->view('plantilas/footer');
            }
        if($auth)
        {
            //echo 'entro a auth';
            $docente = $this->ws_dirdoc->getAcademico($rut);//ingresar rut academico para probar...
            if(isset($docente))
            {
                $tipo = $docente->tipo;
                $nombre = $docente->alias;
                $_SESSION['nombre'] = $nombre;
                if(isset($docente->jerarquia) && $tipo == "PROF")
                {
                    //echo 'entro a jerarquia';
                    $jerarquia = $docente->jerarquia;
                    if ($jerarquia == "ASISTENTE") {
                        $_SESSION['jerarquia'] = $jerarquia;
                        //echo 'entro como asistente';
                        $data['title'] = 'Index';
                        $this->load->model('asignatura_model');

                        $this->load->view('plantilas/header');
                        $this->load->view('login_head');
                        $this->load->view('menu_admin_jefe');
                        $this->load->view('plantilas/footer');
                    }

                }
            }
        }
        else{

        }
    }     

    public function cerrarsesion()
    {
        session_destroy();
    }   
}  
?>