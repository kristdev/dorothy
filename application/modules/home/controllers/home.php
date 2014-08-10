<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	}

	public function index(){
		$data['module']='home';
		$data['view']='homeview';
		$data['description']='Moteur de recherche destiné aux universités du Cameroun';
		$data['title']='Dorothy - Cameroon Universities Library Search engine';
		echo Modules::run('template/home',$data);
	}

	public function check_loginerror($status_loginerror){
			if($this->session->userdata('id')){
			redirect(base_url());
		}
		else{
			$data['module']='home';
			$data['view']='homeview';
			$data['description']='Moteur de recherche destiné aux universités du Cameroun';
			$data['title']='Dorothy - Cameroon Universities Library Search engine';
			$data['login_error']="Erreur de Connexion";
			echo Modules::run('template/home',$data);
		}
	}
}
?>