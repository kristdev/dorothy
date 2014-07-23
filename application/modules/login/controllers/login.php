<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index(){
       		$this->load->view('loginview', FALSE);
       }

       public function login(){
       		$config= array(
       			array(
       				'field'			=>	'email',
					    'label'			=>	'Username',
					    'rules'			=>	'required|xss_clean|valid_email'
   				  ),
     				array(
         			'field'			=>	'password',
  					  'label'			=>	'Password',
  					  'rules'			=>	'required|xss_clean'
     				)
   			);

   			$this->form_validation->set_rules($config);

			if($this->form_validation->run()==false){
				
			}else{
				$identity= $this->input->post('email');
				$password= $this->input->post('password');
        $remember=true;
				if($this->ion_auth->login($identity, $password, $remember)){
					$user = $this->ion_auth->user()->row();
          $session_data=array(
            'id'                => $user->id,
            'email'             => $user->email,
            'first_name'        => $user->first_name,
            'last_name'         => $user->last_name,
            'group'             => $user->group
          );
          $this->session->set_userdata($session_data);

					redirect(base_url().'dashboard');
				}else{
					$current_url=current_url();
          $current_module=$this->uri->segment(1);
          if($current_module==0) $current_module="home";
          $data['login_error']='Erreur d\'autentification, veuillez tenter une nouvelle authentification';
          echo Modules::run($current_module,$data);
				}
			}
       }
}
?>