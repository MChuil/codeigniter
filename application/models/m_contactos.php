<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_contactos extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function getAll(){
       
        $query = $this->db->get('contactos');
        return $query->result();
    }

    function getId($id){
        //$this->load->database();
        $query = $this->db->where('id', $id);
        $query = $this->db->get('contactos');
        return $query->result();
    }

    function add(){
        //$this->load->database();
        $dataInsertar = $this->input->post();
        unset($dataInsertar['btnEnviar']);
        $this->db->insert('contactos' ,$dataInsertar);
        return $this->db->insert_id();

    }

    function update($id){
        //$this->load->database();
        $dataEditar = $this->input->post();
        unset($dataEditar['btnEnviar']);
        $this->db->where('id', $id);
        $this->db->update('contactos' ,$dataEditar);
    }

    function delete($id){
        //$this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('contactos');
    }
   
}
