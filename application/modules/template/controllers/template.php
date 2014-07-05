<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Ce tte classe gère tous les vues utilisateur
class Template extends MX_Controller {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code

    	function test_function($loginform_data){
	   		$objResponse = new xajaxResponse();
	   		$config=array(
				array(
						'field'			=>	'email',
						'label'			=>	'Email',
						'rules'			=>	'required|xss_clean|valid_email'					
					),
				array(
						'field'			=>	'password',
						'label'			=>	'password',
						'rules'			=>	'required|xss_clean'					
					)
			);
			// $this->form_validation->set_rules($config);
			
	   		$message='
					<div class="alert alert-success alert-dismissable">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Success!</strong> Email ou Password éroné.
					</div>
				';
	  		$objResponse->assign("response","innerHTML",$message);
	  		return $objResponse;
   		}

	    // xajax initialisation
        $this->load->library('xajax');
        //$this->xajax->setCharacterEncoding('iso-8859-1');// On précise à xAjax qu'on souhaite travailler en ISO-8859-1.
  		$this->xajax->register(XAJAX_FUNCTION, 'test_function');
  		$this->xajax->processRequest();
  		// Finxajax initialisation
	}

	public function opi(){
		$message='
			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <strong>Warning!</strong> Better check yourself, you\'re not looking too good.
			</div>
		';
		return $message;
	}

	// fonction qui gère la vue accueil du projet
	public function home($data){
		$data['xajax_js'] = $this->xajax->getJavascript(base_url());
		$this->load->view('homepage', $data, FALSE);
	}

	// fonction qui gère la vue myapp après authentification du projet
	public function myapp($data){
		$data['xajax_js'] = $this->xajax->getJavascript(base_url());
		$this->load->view('myapppage', $data, FALSE);
	}

	public function menu(){
		$this->load->view('./include/menuview', FALSE);
	}
}
?>