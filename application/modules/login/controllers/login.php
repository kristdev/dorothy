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

  public function signin(){
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
      $previous_url=$this->agent->referrer();
      $count_chars=substr_count($previous_url, 'register');
      if($count_chars==1){
          $module="register";
      }else $module="home";
      $status_loginerror="true";
      echo Modules::run($module.'/check_loginerror',$status_loginerror);
    }else{
	    $identity= $this->input->post('email');
	    $password= $this->input->post('password');
      $remember=false;

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

		    redirect(base_url());
	    }else{
		    $previous_url=$this->agent->referrer();
        $count_chars=substr_count($previous_url, 'register');
        if($count_chars==1){
            $module="register";
        }else $module="home";
        $status_loginerror="true";
        echo Modules::run($module.'/check_loginerror',$status_loginerror);
      }
    }
  }
}
?>