<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct() {
parent::__construct();

}

  public function index()
  {
  	 $this->load->view('index');
  }


public function trainings(){

	 $this->load->view('trainings');
 
}
public function timetables(){
 $this->load->view('timetable');
 
}

public function nutritions(){
 $this->load->view('nutrition');
 
}
public function gallerys(){
 $this->load->view('gallery');
 
}
public function contacts(){

$this->load->view('contacts');
 
}
public function login(){

 $this->load->view('login');
 
}
public function register(){

$this->load->view('register');
$this->load->database();
$this->load->model('Register_model');

  if (isset($_POST['regs'])){

    	$data = array(

    		'first_name' => $this->input->post('new_user_first'),
    		'last_name' => $this->input->post('new_user_last'),
    		'password' => $this->input->post('new_user_password'),
    		'phone' => $this->input->post('new_user_phone'),
    		'city'=>$this->input->post('new_user_city'),
    		'about' =>$this->input->post('user_about')


    		);


    	$this->Register_model->insert($data);
        
    }
}

}