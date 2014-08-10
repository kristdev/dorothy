<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sidebar_menuapp extends MX_Controller {

   	public function __construct(){
	    parent::__construct();
	    // Your own constructor code
	    $this->load->model('mdl_sidebar_menuapp');
   	}

   	public function index(){
   		$user_id=$this->session->userdata('id');
   		$data['group']= $this->ion_auth->group($user_id)->result();
   		$this->load->view('sidebar_menuappview', $data, FALSE);
   	}
}
?>