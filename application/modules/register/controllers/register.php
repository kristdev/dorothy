<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MX_Controller {

   	public function __construct(){
        parent::__construct();
        // Your own constructor code
   	}

   	public function index(){
   		if($this->session->userdata('id')){
			redirect(base_url().'myapp');
		}
		else{
			$data['module']='register';
			$data['view']='registerpage';
			$data['description']='Moteur de recherche destiné aux universités du Cameroun';
			$data['title']='Dorothy - Crééez un compte';
			echo Modules::run('template/myapp',$data);
		}
	}	
}
?>