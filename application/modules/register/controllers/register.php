<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MX_Controller {

   	public function __construct(){
        parent::__construct();
        // Your own constructor code
   	}

   	public function index(){
   		if($this->ion_auth->logged_in()){
			redirect(base_url());
		}
		else{
			$data['module']='register';
			$data['view']='registerpage';
			$data['description']='Moteur de recherche destiné aux universités du Cameroun';
			$data['title']='Dorothy - Crééez un compte';
			echo Modules::run('template/myapp',$data);
		}
	}

	public function create_user(){
		$config=array(
				array(
						'field'			=>	'first_name',
						'label'			=>	'First name',
						'rules'			=>	'required|xss_clean'					
					),
				array(
						'field'			=>	'last_name',
						'label'			=>	'Last name',
						'rules'			=>	'required|xss_clean'					
					),
				array(
						'field'			=>	'groupe',
						'label'			=>	'Groupe',
						'rules'			=>	'required|xss_clean'					
					),
				array(
						'field'			=>	'email',
						'label'			=>	'Email',
						'rules'			=>	'required|xss_clean|valid_email|is_unique[users.email]'					
					),
				array(
						'field'			=>	'password',
						'label'			=>	'Password',
						'rules'			=>	'required|xss_clean|min_length[6]|max_length[12]'					
					),
				array(
						'field'			=>	'password1',
						'label'			=>	'Password Confirmed',
						'rules'			=>	'required|xss_clean|matches[password]'					
					)
			);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run()==false){
			$this->index();
		}else{
			
		}
	}

	
}
?>