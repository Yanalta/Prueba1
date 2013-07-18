<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 public function save_data()
 {
  $data=array(
   'titulo'		=>$this->input->post('titulo'),
   'descripcion' => $this->input->post('descripcion'),
   'fecha'		=>$this->input->post('fecha'),
   'boleano'	=>$this->input->post('boleano')
  );
  $this->db->insert('contenido',$data);
 }
 
 function get_all()
 {
  $query=$this->db->get('contenido');
  return $query->result();
 }
}