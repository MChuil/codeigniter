<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation'); //se agrega la libreria de validación
        $this->load->model('M_contactos');
    }

	public function index()
	{
        //$this->load->helper('url');
        //$this->load->model('M_contactos');  //se indica el modelo
        $data['listado'] = $this->M_contactos->getAll();
        //if(empty($listado)){
        //    echo "Sin contactos";
        //}else{
           // var_dump($listado); 
            $this->load->view('lista_contactos', $data);   
        //}
    }
    
    public function agregar(){
        //$this->load->helper('form');
        //$this->load->helper('url');
        //$this->load->library('form_validation'); //se agrega la libreria de validación
        //$this->load->model('M_contactos');
       if($this->input->post()){ //si hay datos
            $this->mis_reglas();
            if($this->form_validation->run() == true){
                $ultimoId = $this->M_contactos->add();
                redirect('contactos');
            }else{
                $this->load->view('form_contactos');
            }
       }else{
            $this->load->view('form_contactos');
       }
       
    }

    public function editar($id = null){
        if($id == null or !is_numeric($id)){
            echo "Falta el ID";
            return;
        }
        //$this->load->helper('form');
        //$this->load->helper('url');
        //$this->load->library('form_validation'); //se agrega la libreria de validación
        //$this->load->model('M_contactos');

        if($this->input->post()){ //si hay datos
            $this->mis_reglas();
            if($this->form_validation->run() == true){
                $this->M_contactos->update($id);
                redirect('contactos');
            }else{
                $this->load->view('form_contactos');
            }
        }else{
            $data['data_contacto'] = $this->M_contactos->getId($id);
            if(empty($data['data_contacto'])){
                echo "El ID es invalido";
            }else{
                $this->load->view('form_contactos', $data);
            }
        }
       
    
        
        
    }

    public function eliminar($id = null){
        if($id == null or !is_numeric($id)){
            echo "Falta el ID";
            return;
        }
        //$this->load->helper('form');
        //$this->load->helper('url');
        //$this->load->model('M_contactos');
        if($this->input->post()){ //si hay datos
           $id_eliminar = $this->input->post('id');
           $this->M_contactos->delete($id_eliminar);
           redirect('contactos');
        }else{
            $data['data_contacto'] = $this->M_contactos->getId($id);
            if(empty($data['data_contacto'])){
                echo "El ID es invalido";
            }else{
                $this->load->view("eliminar_contactos", $data);
            }
        }
    }

     function mis_reglas(){
        $this->form_validation->set_rules('email','Correo electronico','required|valid_email');
        $this->form_validation->set_rules('nombre','Nombre','required|min_length[3]');
        $this->form_validation->set_rules('edad','Edad','required|integer');
        $this->form_validation->set_rules('telefon','Telefono','trim');
        $this->form_validation->set_rules('estatus','Estatus','trim');
    }
}
