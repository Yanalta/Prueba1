<?php 
class Home extends CI_Controller{
 public function __construct(){
  parent::__construct();
  $this->load->model('home_model');
 }
 public function index()
 {
  $this->load->view('home_view');
 }
 public function add_data()
 {
  $_POST['fecha'] = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('fecha', 'Date of Birth', 'callback_date_check');
  if ($this->form_validation->run() == FALSE)
  {
	
   $this->load->view('home_view');
   $this->load->view("site_nav");
  }
  else
  {
   $this->home_model->save_data();
   $this->show();
  }
 }
 
 public function date_check()
 {
  if(checkdate($_POST['month'],$_POST['day'],$_POST['year']))
  {
   return TRUE;
  }
  else
  {
   $this->form_validation->set_message('date_check', 'Fecha Correcta.');
   return FALSE;
  }
 }
 
 public function show()
 {
  $this->load->view("site_nav");
  $this->load->model('home_model');
  $data['query']=$this->home_model->get_all();
  $this->load->view('dateshow_view',$data);
 }
 
 public function title()
 {
	$this->load->helper('url');
	$this->load->view("site_nav");
	$this->load->model('home_model');
	$data['query']=$this->home_model->get_all();
	$this->load->view('titulos_view', $data);
 }
 
 public function title2()
 {
	
	$this->load->helper('url');
	$this->load->view("site_nav");
	$this->load->model("home_model");
	$data['query']=$this->home_model->get_info("titulo");
	$this->load->view('titulosInfo_view', $data);
 }
 
}
?>