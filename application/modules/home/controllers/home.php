<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	}

	public function index($check_loginerror=null){
			if($this->session->userdata('id')){
			redirect(base_url().'myapp');
		}
		else{
			$data['module']='home';
			$data['view']='homeview';
			$data['description']='Moteur de recherche destiné aux universités du Cameroun';
			$data['title']='Dorothy - Cameroon Universities Library Search engine';
			if(isset($check_loginerror) and $check_loginerror==true){
				$data['login_error']='Erreur d\'autentification, veuillez tenter une nouvelle authentification';
			}
			echo Modules::run('template/home',$data);
		}
	}
}
?>