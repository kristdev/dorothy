<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Ce tte classe gère tous les vues utilisateur
class Template extends MX_Controller {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	}

	// fonction qui gère la vue accueil du projet
	public function home($data){
		$this->load->view('homepage', $data, FALSE);
	}

	// fonction qui gère la vue myapp après authentification du projet
	public function myapp($data){
		$this->load->view('myapppage', $data, FALSE);
	}
}
?>